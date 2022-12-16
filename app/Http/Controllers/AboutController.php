<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', About::class);

        $search = $request->get('search', '');

        $abouts = About::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.abouts.index', compact('abouts', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', About::class);

        return view('app.abouts.create');
    }

    /**
     * @param \App\Http\Requests\AboutStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
        $this->authorize('create', About::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('public');
        }

        $about = About::create($validated);

        return redirect()
            ->route('abouts.edit', $about)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, About $about)
    {
        $this->authorize('view', $about);

        return view('app.abouts.show', compact('about'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, About $about)
    {
        $this->authorize('update', $about);

        return view('app.abouts.edit', compact('about'));
    }

    /**
     * @param \App\Http\Requests\AboutUpdateRequest $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdateRequest $request, About $about)
    {
        $this->authorize('update', $about);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::delete($about->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('logo')) {
            if ($about->logo) {
                Storage::delete($about->logo);
            }

            $validated['logo'] = $request->file('logo')->store('public');
        }

        $about->update($validated);

        return redirect()
            ->route('abouts.edit', $about)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, About $about)
    {
        $this->authorize('delete', $about);

        if ($about->image) {
            Storage::delete($about->image);
        }

        if ($about->logo) {
            Storage::delete($about->logo);
        }

        $about->delete();

        return redirect()
            ->route('abouts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
