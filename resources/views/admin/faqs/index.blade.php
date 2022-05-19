@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
        @can('faq-create')
            <a class="btn btn-success" href="{{ route('admin.faqs.create') }}"> Create New Faq</a>
        @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="card shadow mb-4">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Faqs</h4>
                    <p>Website all faqs list</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($faqs as $key => $faq)
                                <tr>
                                <td>{{ ++$i }}</td>
                                    <td>
                                    {{ $faq->question }}
                                    </td>
                                    <td>
                                    {!! $faq->answer !!}
                                    </td>
                                    <td>
                                    {{ $faq->status }}
                                    </td>
                                    <td style="width: 105px;">
                                        
                                        
            <a class="" href="{{ route('admin.faqs.show',$faq->id) }}"><span class="badge badge-info"><i class="fas fa-info-circle"></i> </span</a>
            @can('faq-edit')
            <a class="" href="{{ route('admin.faqs.edit',$faq->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
            @endcan
            @can('faq-delete')
            <a href="#" class="show_confirm"
            onclick="event.preventDefault(); 
                            " data-toggle="tooltip" title='Delete'>
            <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
            </a>
                {!! Form::open(['id' => 'delete-form', 'method' => 'DELETE','route' => ['admin.faqs.destroy', $faq->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'badge badge-danger']) !!}
                {!! Form::close() !!}
            @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
{!! $faqs->render() !!}

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                document.getElementById('delete-form').submit();
            }
          });
      });
  
</script>
@endsection