<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;

class SliderController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Slider::class);

        $search = $request->get('search', '');

        $sliders = Slider::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.sliders.index', compact('sliders', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Slider::class);

        return view('app.sliders.create');
    }

    /**
     * @param \App\Http\Requests\SliderStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStoreRequest $request)
    {
        $this->authorize('create', Slider::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $slider = Slider::create($validated);

        return redirect()
            ->route('sliders.edit', $slider)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Slider $slider)
    {
        $this->authorize('view', $slider);

        return view('app.sliders.show', compact('slider'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Slider $slider)
    {
        $this->authorize('update', $slider);

        return view('app.sliders.edit', compact('slider'));
    }

    /**
     * @param \App\Http\Requests\SliderUpdateRequest $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        $this->authorize('update', $slider);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($slider->image) {
                Storage::delete($slider->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $slider->update($validated);

        return redirect()
            ->route('sliders.edit', $slider)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Slider $slider)
    {
        $this->authorize('delete', $slider);

        if ($slider->image) {
            Storage::delete($slider->image);
        }

        $slider->delete();

        return redirect()
            ->route('sliders.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
