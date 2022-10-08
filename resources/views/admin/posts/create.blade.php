@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
            <a class="btn btn-primary" href="{{ route('admin.posts.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create New Post</h6>
</div>
<div class="card-body">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::open(array('route' => 'admin.posts.store','method'=>'POST', 'enctype' => "multipart/form-data")) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <label for="title" class="form-label"><h4>Title</h4></label>
            {!! Form::text('title', null, array('placeholder' => 'Blog Title/Heading','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="short_description" class="form-label"><h4>Short Description</h4></label>
            <input class="form-control" name="short_description" placeholder="Short Description" id="short_description">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>Description</h4></label>
            <input class="form-control" name="description" placeholder="Description" id="description">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>Upload Image</h4></label>
            <input type="file" class="form-control" name="blog_image" placeholder="Blog Image" id="blog_image">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>Tags</h4></label>
        </div>
    </div>
</div>
<div class="row" style="padding: 0 50px;">
            @foreach($tags as $tag)
            <div class="col-xs-4 col-sm-4 col-md-4">
            <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="defaultCheck1" style="z-index: 9999; opacity: unset !important;">
            <label class="form-check-label" for="defaultCheck1">
            {{ $tag->name }}
            </label>
            </div>
            @endforeach
</div>
<hr>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>Page Banner</h4></label>
            <input type="file" class="form-control" name="page_banner_image" placeholder="Page Banner" id="page_banner_image">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>H1 Tags</h4></label>
            <input type="text" class="form-control" name="h1_tags" placeholder="Page Banner" id="h1_tags">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="description" class="form-label"><h4>H2 Tags</h4></label>
            <input type="text" class="form-control" name="h2_tags" placeholder="Page Banner" id="h2_tags">
        </div>
    </div>
</div>
<div class="row pt-5">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>


@endsection

@section('script')
<script src="{!! url('admin/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#short_description',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
        });
        tinymce.init({
            selector: '#description',
            height: 300,
            menubar: false,
            plugins: "link image code lists",
            toolbar: 'undo redo | styleselect | forecolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
        });
    </script>
@endsection