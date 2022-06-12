@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
        @can('review-create')
            <a class="btn btn-success" href="{{ route('admin.reviews.create') }}"> Create New review</a>
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
                    <h4>reviews</h4>
                    <p>Website all reviews list</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($reviews as $key => $review)
                                <tr>
                                <td>{{ ++$i }}</td>
                                    <td>
                                    {{ $review->name }}
                                    </td>
                                    <td>
                                    {!! $review->email !!}
                                    </td>
                                    <td>
                                    {!! $review->subject !!}
                                    </td>
                                    <td>
                                    {!! $review->comments !!}
                                    </td>
                                    <td>
                                    {{ $review->status }}
                                    </td>
                                    <td style="width: 105px;">
                                        
                                        
            <a class="" href="{{ route('admin.reviews.show',$review->id) }}"><span class="badge badge-info"><i class="fas fa-info-circle"></i> </span</a>
            @can('review-edit')
            <a class="" href="{{ route('admin.reviews.edit',$review->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
            @endcan
            @can('review-delete')
            <a href="#" class="show_confirm"
            onclick="event.preventDefault(); 
                            " data-toggle="tooltip" title='Delete'>
            <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
            </a>
                {!! Form::open(['id' => 'delete-form', 'method' => 'DELETE','route' => ['admin.reviews.destroy', $review->id],'style'=>'display:inline']) !!}
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
{!! $reviews->render() !!}

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