@extends('layouts.admin')

@section('content')
<div class="row">
    <!-- Item -->
    <div class="col-xl-4 col-sm-6">
        <div class="db-info-list">
            <div class="dashboard-stat-icon bg-blue">
                <i class="far fa-chart-bar"></i>
            </div>
            <div class="dashboard-stat-content">
                <h4>Package Review</h4>
                <h5>{{ $reviewCount }}</h5> 
            </div>
        </div>
    </div>
    <!-- Item -->
    <div class="col-xl-4 col-sm-6">
        <div class="db-info-list">
            <div class="dashboard-stat-icon bg-green">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="dashboard-stat-content">
                <h4>Booking Enquiry</h4>
                <h5>{{ $bookingCount }}</h5> 
            </div>
        </div>
    </div>
    <!-- Item -->
    <div class="col-xl-4 col-sm-6">
        <div class="db-info-list">
            <div class="dashboard-stat-icon bg-red">
                <i class="far fa-envelope-open"></i>
            </div>
            <div class="dashboard-stat-content">
                <h4>Contact Enquiry</h4>
                <h5>{{ $contactCount }}</h5> 
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dashboard-box table-opp-color-box">
            <h4>Booking Enquiry</h4>
            <p>Recent booking enquiry list</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Package</th>
                            <th>Booking Date</th>
                            <th>No of Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentBookingLists as $recentBookingList)
                        <tr>
                            <td>
                                {{ $recentBookingList->full_name }}
                            </td>
                            <td>{{ $recentBookingList->email }}</span>
                            </td>
                            <td>{{ $recentBookingList->mobile }}
                            </td>
                            <td>{{ $recentBookingList->package_name }}</td>
                            <td>{{ $recentBookingList->booking_date }}</td>
                            <td>
                                <span class="badge badge-success">{{ $recentBookingList->no_of_persons }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    <div class="col-lg-12">
        <div class="dashboard-box table-opp-color-box">
            <h4>Contat Enquiry</h4>
            <p>Recent contact enquiry list</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Sent Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentContactLists as $recentContactList)
                        <tr>
                            <td>
                            <span class="list-enq-name">{{ $recentContactList->name }}</span>
                            </td>
                            <td>{{ $recentContactList->email }}</span>
                            </td>
                            <td>{{ $recentContactList->message }}
                            </td>
                            <td>{{ $recentContactList->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dashboard-box">
            <h4>User Activity Report</h4>
            <p>Get all request for booking/contact/reivew by each user</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Enquiry</th>
                            <th>Bookings</th>
                            <th>Reviews</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userData as $userRow)
                        <tr>
                            <td><a href="#"><span class="list-name">{{ $userRow->full_name }}</span></a>
                            </td>
                            <td>-----</td>
                            <td>{{ $userRow->email }}</td>
                            <td>
                                <span class="badge badge-primary">
                                @if(isset($contact_info_array[$userRow->email]))
                                {{  $contact_info_array[$userRow->email] }}
                                @else
                                0
                                @endif
                            </span>
                            </td>
                            <td>
                                <span class="badge badge-danger">
                                @if(isset($booking_info_array[$userRow->email]))
                                {{  $booking_info_array[$userRow->email] }}
                                @else
                                0
                                @endif
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-success">
                                @if(isset($review_info_array[$userRow->email]))
                                {{  $review_info_array[$userRow->email] }}
                                @else
                                0
                                @endif
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>


@endsection
