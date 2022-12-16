@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('sliders.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.sliders.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.sliders.inputs.badge')</h5>
                    <span>{{ $slider->badge ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.sliders.inputs.title')</h5>
                    <span>{{ $slider->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.sliders.inputs.button')</h5>
                    <span>{{ $slider->button ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.sliders.inputs.link')</h5>
                    <span>{{ $slider->link ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.sliders.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $slider->image ? \Storage::url($slider->image) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('sliders.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Slider::class)
                <a href="{{ route('sliders.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
