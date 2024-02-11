@extends('admin.layouts.master')

@section('content')
<div class="row">
    <!-- form start -->

    <form id="form_1" action="{{url('/admin/site-setting',$model->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Details</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="form-group{{ $errors->first('title')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Title <span>*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="site_name" value="{{$model->site_name}}" class="form-control" placeholder="Site name">
                            {!! $errors->first('site_name', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('email')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Email <span>*</span></label>
                        <div class="col-sm-9">
                            <input type="email" name="contact_email" value="{{$model->contact_email}}" class="form-control" placeholder="Email">
                            {!! $errors->first('contact_email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('tel_no')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Tel No</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact_no" value="{{$model->contact_no}}" class="form-control" placeholder="Contact number">
                            {!! $errors->first('contact_no', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('address')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact_address" value="{{$model->contact_address}}" class="form-control" placeholder="Address">
                            {!! $errors->first('contact_address', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Home Page Settings</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group{{ $errors->first('site_logo')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">
                            Site logo <p class="help-note">[ *.jpg, *.png, *.gif ]</p>
                        </label>
                        <div class="{{ isset($model) && $model->site_logo ? 'col-sm-6' : 'col-sm-9' }}">
                            <input type="file" name="site_logo" class="form-control">
                            {!! $errors->first('site_logo', '<span class="help-block">:message</span>') !!}
                        </div>
                        @if (isset($model) && $model->site_logo)
                        <div class="col-sm-3 form-bg_testimonial">
                            <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->siteLogo.'/'.$model->site_logo) }}">
                                <img src="{{ asset($model->siteLogo.'/'.$model->site_logo) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->first('about_image')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">
                            About us Image <p class="help-note">[ *.jpg, *.png, *.gif ]</p>
                        </label>
                        <div class="{{ isset($model) && $model->about_image ? 'col-sm-6' : 'col-sm-9' }}">
                            <input type="file" name="about_image" class="form-control">
                            {!! $errors->first('about_image', '<span class="help-block">:message</span>') !!}
                        </div>
                        @if (isset($model) && $model->about_image)
                        <div class="col-sm-3 form-bg_footer">
                            <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->aboutImage.'/'.$model->about_image) }}">
                                <img src="{{ asset($model->aboutImage.'/'.$model->about_image) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->first('about_bg_image')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">
                            About us Background Image <p class="help-note">[ *.jpg, *.png, *.gif ]</p>
                        </label>
                        <div class="{{ isset($model) && $model->about_bg_image ? 'col-sm-6' : 'col-sm-9' }}">
                            <input type="file" name="about_bg_image" class="form-control">
                            {!! $errors->first('about_bg_image', '<span class="help-block">:message</span>') !!}
                        </div>
                        @if (isset($model) && $model->about_bg_image)
                        <div class="col-sm-3 form-bg_footer">
                            <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->aboutBg. '/'.$model->about_bg_image) }}">
                                <img src="{{ asset($model->aboutBg. '/'.$model->about_bg_image) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->first('contact_image')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">
                            About us Background Image <p class="help-note">[ *.jpg, *.png, *.gif ]</p>
                        </label>
                        <div class="{{ isset($model) && $model->contact_image ? 'col-sm-6' : 'col-sm-9' }}">
                            <input type="file" name="contact_image" class="form-control">
                            {!! $errors->first('contact_image', '<span class="help-block">:message</span>') !!}
                        </div>
                        @if (isset($model) && $model->contact_image)
                        <div class="col-sm-3 form-bg_footer">
                            <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->contactImage.'/'.$model->contact_image) }}">
                                <img src="{{ asset($model->contactImage.'/'.$model->contact_image) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                            </a>
                        </div>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->first('site_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Site description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->site_description}}" name="site_description">{{$model->site_description}}</textarea>
                            {!! $errors->first('site_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('site_info')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Site info</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->site_info}}" name="site_info">{{$model->site_info}}</textarea>
                            {!! $errors->first('site_info', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('contact_info')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">contact information</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->contact_info}}" name="contact_info">{{$model->contact_info}}</textarea>
                            {!! $errors->first('contact_info', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('contact_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">contact description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->contact_description}}" name="contact_description">{{$model->contact_description}}</textarea>
                            {!! $errors->first('contact_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('goal')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Goal</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->goal}}" name="goal">{{$model->goal}}</textarea>
                            {!! $errors->first('goal', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('objective')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Objective</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->objective}}" name="objective">{{$model->objective}}</textarea>
                            {!! $errors->first('objective', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('client_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Client description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->client_description}}" name="client_description">{{$model->client_description}}</textarea>
                            {!! $errors->first('client_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('project_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Project description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->project_description}}" name="project_description">{{$model->project_description}}</textarea>
                            {!! $errors->first('project_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('service_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">Service description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->service_description}}" name="service_description">{{$model->service_description}}</textarea>
                            {!! $errors->first('service_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('about_caption')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">About caption</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->about_caption}}" name="about_caption">{{$model->about_caption}}</textarea>
                            {!! $errors->first('about_caption', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->first('about_description')?' has-error':'' }}">
                        <label class="col-sm-3 control-label">About description</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor" value="{{$model->about_description}}" name="about_description">{{$model->about_description}}</textarea>
                            {!! $errors->first('about_description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>



                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Social Links</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-12 control-label'">Facebook</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" value="{{$model->facebook}}" name="facebook">
                            {!! $errors->first('facebook', '<div class="help-block">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label'">Instagram</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" value="{{$model->instagram}}" name="instagram">
                            {!! $errors->first('instagram', '<div class="help-block">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label'">Linkend</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" value="{{$model->linkend}}" name="linkend">
                            {!! $errors->first('linkend', '<div class="help-block">:message</div>') !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">SEO</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" value="{{$model->meta}}" name="meta">
                        </div>
                        <div class="form-group">
                            <label for="MetaKeywords">Meta Keywords</label>
                            <input type="text" class="form-control" value="{{$model->meta_keyword}}" name="meta_keyword">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <textarea col="5" type="text" class="form-control" value="{{$model->meta_description}}" name="meta_description"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Action</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@push('script')
<!-- CK Editor -->
<script src="{{asset('admin/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script>
    $(function() {
        CKEDITOR.replace('editor');
    });
</script>
@endpush