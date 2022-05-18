
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
                   
                                    <a href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
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