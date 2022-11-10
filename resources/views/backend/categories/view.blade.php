@extends('layouts.backend.master')
@include('layouts.components.route.links_index',['name'=>'Category','route'=>route('categories.index')])
@section('style')
@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            {{ TanslationHelper::translate('This Section Contains Sensitive Data .. Be Careful') }}
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
            </div>
            @include('layouts.components.form-input.New-Record',['route'=>route('categories.create')])
        </div>
        <div class="kt-portlet__body">
            @include('layouts.components.form-input.search',['route'=>route('categories.index')])
            <!--begin: Datatable -->

            <table class="table table-striped- table-bordered table-hover table-checkable" >
                <thead>
                    <tr>
                        <th>{{TanslationHelper::translate('Record ID')}}</th>
                        <th>{{TanslationHelper::translate('Name')}}</th>
                        <th>{{TanslationHelper::translate('Description')}}</th>
                        <th>{{TanslationHelper::translate('Image')}}</th>
                        <th>{{TanslationHelper::translate('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key=>$category)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            @include('layouts.components.form-input.images_index',['model'=>$category,'name'=>'category'])
                        </td>
                        <td>
                            <span style="overflow: visible; position: relative; width: 110px;">
                                @include('layouts.modal.Edit-modal', ['route' => route('categories.edit', $category->id) ])
                                @include('layouts.modal.delete-modal', ['id' => $category->id, 'name' => $category->name, 'route' => route('categories.destroy', $category->id) ])
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
            <!--end: Datatable -->
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
