@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4> {{ $package->name }}</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.packages.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Discription:</strong>
            {!! $package->description !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Program:</strong>
            {!!$package->program !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Policy:</strong>
            {!!$package->policy !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Trip Days:</strong>
            {{ $package->trip_days }}days {{ $package->trip_nights }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Adult Sale Price:</strong>
            {{ $package->adult_sp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Adult Regular Price:</strong>
            {{ $package->adult_rp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Adult Discount:</strong>
            {{ $package->adult_dsc }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Child Sale Price:</strong>
            {{ $package->child_sp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Child Regular Price:</strong>
            {{ $package->child_rp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Child Discount:</strong>
            {{ $package->child_dsc }}
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Infant Sale Price:</strong>
            {{ $package->infant_sp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Infant Regular Price:</strong>
            {{ $package->infant_rp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Infant Discount:</strong>
            {{ $package->infant_dsc }}
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Couple Sale Price:</strong>
            {{ $package->couple_sp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Couple Regular Price:</strong>
            {{ $package->couple_rp }}
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Couple Discount:</strong>
            {{ $package->couple_dsc }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Popular:</strong>
            @if($package->popular == 1)
            Yes
            @else
            No
            @endif
        </div>
    </div>
    
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Package Small Image:</strong>
            <img src="{{ url('/images/'.$package->package_small_pic) }}">
        </div>
    </div>
<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Package Large Image:</strong>
        <img src="{{ url('/images/'.$package->package_large_pic) }}">
    </div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Categories:</strong>
            @foreach($package->categories as $category)
            {{ $category->name }} 
            @if(!$loop->last)
            ,
            @endif
            @endforeach  
        </div>
    </div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Galleries:</strong>
            <p>
            @foreach($package->images as $image)
            <img src="{{ url('/images/'.$image->url) }}"> 
            @endforeach  
            </p>
        </div>
    </div>
</div>
@endsection