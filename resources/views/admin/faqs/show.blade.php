@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Faq</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.faqs.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Question:</strong>
            {{ $faq->question }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Answer:</strong>
            {!!$faq->answer !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ $faq->status }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Packages Link To:</strong>
            @foreach($faq->packages as $package)
            <p>
            {{ $package->name }} </p>
            @endforeach
        </div>
    </div>
</div>
@endsection