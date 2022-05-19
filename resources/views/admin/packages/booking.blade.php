
@extends('layouts.admin')


@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="col-lg-12 margin-tb">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Package Booking List</h4>
                    <p>Booking requested by users</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>No of People</th>
                                    <th>Booking Date </th>
                                    <th>Package Name</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking) 
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td> 
                                    </span><span class="package-name">{{ $booking->full_name }}</span>
                                </td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->mobile }}</td>
                                
                                <td>{{ $booking->no_of_persons }}</td>
                                <td>{{ $booking->booking_date }}</td>
                                
                                <td>{{ $booking->package_name }}</td>
                                    <td>
                   
                                    <a href="#" class="show_confirm"
                                       onclick="event.preventDefault(); 
                                                     " data-toggle="tooltip" title='Delete'>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </a>
                                        {!! Form::open(['id'=> 'delete-form','method' => 'DELETE','route' => ['admin.bookings.destroy', $booking->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'badge badge-danger']) !!}
                                        {!! Form::close() !!}
                                    
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    {!! $bookings->render() !!}
                </div>
            </div>
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