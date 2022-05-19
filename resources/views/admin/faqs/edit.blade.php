@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
            <a class="btn btn-primary" href="{{ route('admin.faqs.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Faq</h6>
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


{!! Form::model($faq, ['method' => 'PATCH','route' => ['admin.faqs.update', $faq->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Question:</strong>
            {!! Form::text('question', null, array('placeholder' => 'Question','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Answer:</strong>
                {!! Form::text('answer', null, array('placeholder' => 'Answer','class' => 'form-control', 'id' => 'answer')) !!}
        </div>
    </div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Status:</strong>
        {!! Form::select('status', ['publish' => 'publish', 'unpublish' => 'unpublish'], "publish") !!}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Packages:</strong>
           @php $selectArray = []; @endphp
           @foreach($faq->packages as $pkg)
           @php $selectArray[] = $pkg->id @endphp
           @endforeach

        <select name="faq_package[]" multiple style="height:400px;">
            @foreach($packages as $package)
            @php $checked = ''; if(in_array($package->id, $selectArray)){ $checked = 'selected';} @endphp
            <option value="{{ $package->id }}" {{ $checked}}>{{ $package->name }} </option>
            @endforeach
        </select>
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
@section('script')
<script src="{!! url('admin/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#answer',
            height: 300
        });
    </script>
@endsection 