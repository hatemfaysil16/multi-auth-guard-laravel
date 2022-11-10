@extends('layouts.backend.master')
@section('page_title',TanslationHelper::translate('All Admin'))
@section('page_left',TanslationHelper::translate('All Admin'))
@section('page_center',TanslationHelper::translate('Admin'))
@section('page_center_link',route('admins.index'))
@section('page_right',TanslationHelper::translate('Admins'))
@section('page_right_link',route('admins.index'))
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
            @include('layouts.components.form-input.New-Record',['route'=>route('admins.create')])
        </div>
        <div class="kt-portlet__body">
            @include('layouts.components.form-input.search',['route'=>route('admins.index')])
            <!--begin: Datatable -->

            <table class="table table-striped- table-bordered table-hover table-checkable">
                <thead>
                    <tr>
                        <th class="wd-10p border-bottom-0">#</th>
                        <th class="wd-15p border-bottom-0">{{TanslationHelper::translate('Admin Name')}}</th>
                        <th class="wd-20p border-bottom-0">{{TanslationHelper::translate('E-mail')}}</th>
                        <th class="wd-15p border-bottom-0">{{TanslationHelper::translate('Status')}}</th>
                        <th class="wd-15p border-bottom-0">{{TanslationHelper::translate('Photo')}}</th>
                        <th class="wd-15p border-bottom-0">{{TanslationHelper::translate('Role')}}</th>
                        <th class="wd-10p border-bottom-0">{{TanslationHelper::translate('Actions')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $admin)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td><label class="badge badge-success">{{ $admin->status }}</label></td>
                        <td>@include('layouts.components.form-input.images_index',['model'=>$admin,'name'=>'profile'])</td>
                        <td>
                            @if(!empty($admin->getRoleNames()))
                                @foreach($admin->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <span style="overflow: visible; position: relative; width: 110px;">
                                @include('layouts.modal.Edit-modal', ['route' => route('admins.edit', $admin->id) ])
                                @include('layouts.modal.delete-modal', ['id' => $admin->id, 'name' => $admin->name, 'route' => route('admins.destroy', $admin->id) ])
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$data->links()}}
            <!--end: Datatable -->
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
