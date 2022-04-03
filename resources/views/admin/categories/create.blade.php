@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
            <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Create New Category</h4>
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


{!! Form::open(array('route' => 'admin.categories.store','method'=>'POST', 'enctype' => "multipart/form-data")) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="custom-field-wrap db-cat-field-wrap">
    <div class="form-group">
    <label><strong>Select parent category*</strong></label>
        <select type="text" name="parent_id" class="form-control">
            <option value="">None</option>
            @if($parentCategories)
                @foreach($parentCategories as $category)
                    <?php $dash=''; ?>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                      @include('admin.categories.subcategory',['subcategories' => $category->subcategory])
                @endforeach
            @endif
        </select>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Background Image:</strong>
            <input type="file" name="background_image" class="form-control" required name="image">
        </div>
    </div>

</div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>


@endsection