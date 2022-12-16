@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.abouts.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create', App\Models\About::class)
                        <a
                            href="{{ route('abouts.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.title')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.description')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.image')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.logo')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.phone')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.sort_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.email')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.address')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.link_tokped')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.link_shopee')
                            </th>
                            <th class="text-left">
                                @lang('crud.abouts.inputs.link_wa')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($abouts as $about)
                        <tr>
                            <td>{{ $about->title ?? '-' }}</td>
                            <td>{{ $about->description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $about->image ? \Storage::url($about->image) : '' }}"
                                />
                            </td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $about->logo ? \Storage::url($about->logo) : '' }}"
                                />
                            </td>
                            <td>{{ $about->phone ?? '-' }}</td>
                            <td>{{ $about->sort_description ?? '-' }}</td>
                            <td>{{ $about->email ?? '-' }}</td>
                            <td>{{ $about->address ?? '-' }}</td>
                            <td>{{ $about->link_tokped ?? '-' }}</td>
                            <td>{{ $about->link_shopee ?? '-' }}</td>
                            <td>{{ $about->link_wa ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $about)
                                    <a
                                        href="{{ route('abouts.edit', $about) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $about)
                                    <a
                                        href="{{ route('abouts.show', $about) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $about)
                                    <form
                                        action="{{ route('abouts.destroy', $about) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="12">{!! $abouts->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
