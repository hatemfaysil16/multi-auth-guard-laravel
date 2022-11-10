@extends('layouts.backend.master')
@section('page_title',isset($admin) ? TanslationHelper::translate('Edit Admins') : TanslationHelper::translate('Create Admins'))
@section('page_left',isset($admin) ? TanslationHelper::translate('Edit Admins') : TanslationHelper::translate('Create Admins'))
@section('page_center',TanslationHelper::translate('Admins'))
@section('page_center_link',route('admins.index'))
@section('page_right',isset($admin) ? TanslationHelper::translate('Edit Admins'):TanslationHelper::translate('Create Admins'))
@section('page_right_link',route('admins.create'))
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{ (isset($admin) ? TanslationHelper::translate('Edit Admins') :TanslationHelper::translate('Create Admins') )  }}
                        </h3>
                    </div>
                </div>
                @include('layouts.MassageValidations.ErrorValidation')

                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" method="post" action="{{$action}}" enctype="multipart/form-data">
                    @include('layouts.components.form-input.csrf_put ')
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Admin Name')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Admin Name'),'type'=>"text",'model'=>$admin,'required'=>"required",'value'=>$admin->name,'name'=>"name",'oldname'=>"name",'class_validation'=>'name'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Admin Name')])
                            </div>

                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Admin E-mail')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Admin E-mail'),'type'=>"email",'model'=>$admin,'required'=>"required",'value'=>$admin->email,'name'=>"email",'oldname'=>"email",'class_validation'=>'email'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Admin E-mail')])
                            </div>

                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Admin password')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Admin password'),'type'=>"password",'model'=>$admin,'required'=>"",'value'=>$admin->password,'name'=>"password",'oldname'=>"password",'class_validation'=>'password'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Admin password')])
                            </div>


                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Admin confirm-password')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Admin confirm-password'),'type'=>"password",'model'=>$admin,'required'=>"",'value'=>$admin->password,'name'=>"confirm-password",'oldname'=>"confirm-password",'class_validation'=>'confirm-password'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Admin confirm-password')])
                            </div>


                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('status')])
                                @include('layouts.components.form-input.select-one',['foreach'=>(App\Models\Consts::ACTIVE),'name'=>'status','model'=>$admin,'nameselect'=>'status'])
                            </div>

                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('role')])
                                @include('layouts.components.form-input.role.select-one')
                            </div>

                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('Image')])
                                @include('layouts.components.form-input.image',['placeholder'=>TanslationHelper::translate('Enter Category Image'),'type'=>"file",'model'=>$admin,'required'=>"required",'name'=>"image",'oldname'=>"image",'class_validation'=>'image'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Upload Category Image')])
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            @include('layouts.components.form-input.submit',['route'=>route('categories.index')])
                        </div>
                    </div>
                </form>




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