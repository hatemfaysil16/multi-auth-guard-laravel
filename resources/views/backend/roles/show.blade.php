@extends('layouts.backend.master')
@section('page_title',isset($role->id) ? TanslationHelper::translate('Show Roles') : TanslationHelper::translate('Create Roles'))
@section('page_left',isset($role->id) ? TanslationHelper::translate('Show Roles') : TanslationHelper::translate('Create Roles'))
@section('page_center',TanslationHelper::translate('Roles'))
@section('page_center_link',route('roles.index'))
@section('page_right',isset($role->id) ? TanslationHelper::translate('Show Roles'):TanslationHelper::translate('Create Roles'))
@section('page_right_link',route('roles.index'))
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{ (isset($category) ? TanslationHelper::translate('show Roles') :TanslationHelper::translate('show Roles') )  }}
                        </h3>
                    </div>
                </div>
                @include('layouts.MassageValidations.ErrorValidation')

                <!--begin::Form-->

<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">{{TanslationHelper::translate('back')}}</a>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-4">
                        <ul id="treeview1">
                            <li><a>{{ $role->name }}</a>
                                <ul>
                                    @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                    <li>{{ $v->name }}</li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /col -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
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