@extends('layouts.backend.master')
@include('layouts.components.route.links_crud',['modelId'=>isset($category->id),'name'=>'Roles','route'=>route('roles.index')])
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <h4 class="content-title mb-0 my-auto">{{TanslationHelper::translate('Roles')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{TanslationHelper::translate('New Roles')}}</span>
                        </h3>
                    </div>
                </div>
                @include('layouts.MassageValidations.ErrorValidation')

                <!--begin::Form-->
            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                <div class="col-xs-7 col-sm-7 col-md-7">
                                    <div class="form-group">
                                        <p>Role Name :</p>
                                        {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-4">
                                    <ul id="treeview1">
                                        <li><a>Permissions</a>
                                            <ul>
                                        </li>
                                        @foreach($permission as $value)
                                        <label
                                            style="font-size: 16px;">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}</label>
                                        @endforeach
                                        </li>

                                    </ul>
                                    </li>
                                    </ul>
                                </div>
                                <!-- /col -->
                                @include('layouts.components.form-input.submit',['route'=>route('roles.index')])

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
