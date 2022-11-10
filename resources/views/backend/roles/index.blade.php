@extends('layouts.backend.master')
@include('layouts.components.route.links_index',['name'=>'Roles','route'=>route('roles.index')])

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
            @include('layouts.components.form-input.New-Record',['route'=>route('roles.create')])
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{TanslationHelper::translate('Role Name')}}</th>
                                <th>{{TanslationHelper::translate('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <span style="overflow: visible; position: relative; width: 110px;">
                                            <a class="btn btn-sm btn-clean btn-icon btn-icon-md" href="{{ route('roles.show', $role->id) }}">{{TanslationHelper::translate('Show')}}</a>
                                            @include('layouts.modal.Edit-modal', ['route' => route('roles.edit', $role->id) ])
                                            @include('layouts.modal.delete-modal', ['id' => $role->id, 'name' => $role->name, 'route' => route('roles.destroy', $role->id) ])
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
    </div>
</div>
@endsection
@section('js')
@endsection
