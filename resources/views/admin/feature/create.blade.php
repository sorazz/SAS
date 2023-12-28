@extends('admin.layouts.master')

@section('content')
<div class="row">
    <!-- form start -->
    @if (isset($model))
    <form id="form_1" action="{{url('/admin/feature/'.$model->id .'/update')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        @else
        <form id="form_1" action="{{url('/admin/feature/store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
            @endif
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group{{ $errors->first('title')?' has-error':'' }}">
                            <label class="col-sm-3 control-label">Title <span>*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value="{{isset($model) ? $model->title : ''}}" class="form-control" placeholder="Title">
                                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->first('image')?' has-error':'' }}">
                            <label class="col-sm-3 control-label">
                                Upload Image
                                <p class="help-note">Type : *.jpg, *.png, *.gif</p>
                            </label>
                            <div class="{{ isset($model) && $model->image ? 'col-sm-6' : 'col-sm-9' }}">
                                <input type="file" name="image" class="form-control">
                                {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                            </div>
                            @if (isset($model) && $model->image)
                            <div class="col-sm-3 form-image">
                                <label>Delete image</label>
                               <input class="form-control" type="checkbox" name="delete-image">

                                <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->upload. '/'.$model->image) }}">
                                    <img src="{{ asset($model->upload. '/'.$model->image) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->first('bg_image')?' has-error':'' }}">
                            <label class="col-sm-3 control-label">
                                Background Banner Image <span></span>
                                <p class="help-note">Size : (800 x 600) px ~ 5:3 <br>[ .jpg, .png, .gif ]</p>
                            </label>
                            <div class="{{ isset($model) && $model->bg_image ? 'col-sm-6' : 'col-sm-9' }}">

                                <input type="file" name="bg_image" class="form-control">

                                {!! $errors->first('bg_image', '<span class="help-block">:message</span>') !!}

                            </div>

                            @if (isset($model) && $model->bg_image)
                            <div class="col-sm-3 form-image">
                                <a class="image_zoom lumos-link" data-lumos="gallery1" href="{{ asset($model->bgimage.'/'.$model->bg_image) }}">

                                    <img src="{{ asset($model->bgimage.'/'.$model->bg_image) }}" alt="{{ $model->title }}" class="img-thumbnail image_list" />
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->first('caption')?' has-error':'' }}">
                            <label class="col-sm-12">Caption</label>
                            <div class="col-sm-12">
                                <textarea class="ckeditor" name="caption">{{isset($model) ? $model->caption : ''}}</textarea>
                                {!! $errors->first('caption', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->first('description')?' has-error':'' }}">
                            <label class="col-sm-12">Description</label>
                            <div class="col-sm-12">

                                <textarea class="ckeditor" name="description">{{isset($model) ? $model->description : ''}}</textarea>
                                {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Action</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status</label>
                            <div class="col-sm-8">
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        @if(isset($model))
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                        <button type="submit" class="btn btn-primary">Create</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
</div>
@stop

@push('script')
<!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(function() {
        CKEDITOR.replace('editor');
    });
</script>
@endpush