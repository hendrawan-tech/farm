@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('galleries.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.galleries.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.title')</h5>
                    <span>{{ $gallery->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.description')</h5>
                    <span>{{ $gallery->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $gallery->image ? \Storage::url($gallery->image) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('galleries.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Gallery::class)
                <a href="{{ route('galleries.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
