@extends('layouts.backend.master')
@include('layouts.components.route.links_crud',['modelId'=>isset($role->id),'name'=>'Roles','route'=>route('roles.index')])
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{ (isset($category) ? TanslationHelper::translate('Edit Roles') :TanslationHelper::translate('Create Roles') )  }}
                        </h3>
                    </div>
                </div>
                @include('layouts.MassageValidations.ErrorValidation')

                <!--begin::Form-->
        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            <div class="form-group">
                                <p>  {{TanslationHelper::translate('name Roles')}}:</p>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-4">
                                <ul id="treeview1">
                                    <li><a href="#">{{TanslationHelper::translate('Roles')}}</a>
                                        <ul>
                                            <li>
                                                @foreach($permission as $value)
                                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    {{ $value->name }}</label>
                                                <br />
                                                @endforeach
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                                @include('layouts.components.form-input.submit',['route'=>route('roles.index')])
                            <!-- /col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        </div>
        <!-- Container closed -->
        </div>
        <!-- main-content closed -->
        {!! Form::close() !!}

                <!--end::Form-->
            </div>

            <!--end::Portlet-->



            <!--end::Portlet-->
        </div>
    </div>
</div>

<!-- end:: Content -->

@endsection


@section('js')
@endsection