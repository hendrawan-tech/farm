@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('abouts.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.abouts.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.title')</h5>
                    <span>{{ $about->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.description')</h5>
                    <span>{{ $about->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $about->image ? \Storage::url($about->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.logo')</h5>
                    <x-partials.thumbnail
                        src="{{ $about->logo ? \Storage::url($about->logo) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.phone')</h5>
                    <span>{{ $about->phone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.sort_description')</h5>
                    <span>{{ $about->sort_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.email')</h5>
                    <span>{{ $about->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.address')</h5>
                    <span>{{ $about->address ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.link_tokped')</h5>
                    <span>{{ $about->link_tokped ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.link_shopee')</h5>
                    <span>{{ $about->link_shopee ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.abouts.inputs.link_wa')</h5>
                    <span>{{ $about->link_wa ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('abouts.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\About::class)
                <a href="{{ route('abouts.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
