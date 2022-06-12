@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show review</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.reviews.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $review->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $review->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject:</strong>
            {{ $review->subject }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Message:</strong>
            {{ $review->comments }}
        </div>
    </div>
</div>
@if($review->status == 'unpublish')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <a href="{{ route('admin.reviews.approve', $review->id) }}" class="button-primary">Approve</a>
        </div>
    </div>
</div>
@endif
@endsection