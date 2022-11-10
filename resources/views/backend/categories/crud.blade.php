@extends('layouts.backend.master')
@include('layouts.components.route.links_crud',['modelId'=>isset($category->id),'name'=>'Category','route'=>route('categories.index')])
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{ (isset($category->id) ? TanslationHelper::translate('Edit Category') :TanslationHelper::translate('Create Category') )  }}
                        </h3>
                    </div>
                </div>
                @include('layouts.MassageValidations.ErrorValidation')

                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" method="post" action="{{$action}}" enctype="multipart/form-data">
                    @include('layouts.components.form-input.csrf_put')
                    <div class="kt-portlet__body">
                        <div class="form-group row">









                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Category Name')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Category Name'),'type'=>"text",'model'=>$category,'required'=>"required",'value'=>$category->translate('name', 'en'),'name'=>"name[en]",'oldname'=>"name.en",'class_validation'=>'name.en'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Category Name')])
                            </div>
                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('Arabic Category Name')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter Arabic Category Name'),'value'=>$category->translate('name', 'ar'),'type'=>"text",'model'=>$category,'required'=>"required",'name'=>"name[ar]",'oldname'=>"name.ar",'class_validation'=>'name.ar'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter Arabic Category Name')])
                            </div>

                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('English Category Description')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter English Category Description'),'value'=>$category->translate('description', 'en'),'type'=>"text",'model'=>$category,'required'=>"required",'name'=>"description[en]",'oldname'=>"description.en",'class_validation'=>'description.en'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter English Category Description')])
                            </div>


                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('Arabic Category Description')])
                                @include('layouts.components.form-input.input',['placeholder'=>TanslationHelper::translate('Enter Arabic Category Description'),'value'=>$category->translate('description', 'ar'),'type'=>"text",'model'=>$category,'required'=>"required",'name'=>"description[ar]",'oldname'=>"description.ar",'class_validation'=>'description.ar'])
                                @include('layouts.components.form-input.span_end',['span_end'=>TanslationHelper::translate('Please Enter Arabic Category Description')])
                            </div>



                            <div class="col-lg-6">
                                @include('layouts.components.form-input.label',['label'=>TanslationHelper::translate('Image')])
                                @include('layouts.components.form-input.image',['placeholder'=>TanslationHelper::translate('Enter Category Image'),'type'=>"file",'model'=>$category,'required'=>"required",'name'=>"image",'oldname'=>"image",'class_validation'=>'image'])
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
CKEDITOR

<!-- end:: Content -->
@endsection
@section('js')
@endsection
