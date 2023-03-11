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
            <h4>User Details</h4>
            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Listings</th>
                            <th>Enquiry</th>
                            <th>Bookings</th>
                            <th>Reviews</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                            </td>
                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                            </td>
                            <td>+01 3214 6522</td>
                            <td>chadengle@dummy.com</td>
                            <td>Australia</td>
                            <td>
                                <span class="badge badge-primary">02</span>
                            </td>
                            <td>
                                <span class="badge badge-danger">12</span>
                            </td>
                            <td>
                                <span class="badge badge-success">24</span>
                            </td>
                            <td>
                                <span class="badge badge-dark">36</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="list-img"><img src="assets/images/comment2.jpg" alt=""></span>
                            </td>
                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                            </td>
                            <td>+01 3214 6522</td>
                            <td>chadengle@dummy.com</td>
                            <td>Australia</td>
                            <td>
                                <span class="badge badge-primary">02</span>
                            </td>
                            <td>
                                <span class="badge badge-danger">12</span>
                            </td>
                            <td>
                                <span class="badge badge-success">24</span>
                            </td>
                            <td>
                                <span class="badge badge-dark">36</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="list-img"><img src="assets/images/comment3.jpg" alt=""></span>
                            </td>
                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                            </td>
                            <td>+01 3214 6522</td>
                            <td>chadengle@dummy.com</td>
                            <td>Australia</td>
                            <td>
                                <span class="badge badge-primary">02</span>
                            </td>
                            <td>
                                <span class="badge badge-danger">12</span>
                            </td>
                            <td>
                                <span class="badge badge-success">24</span>
                            </td>
                            <td>
                                <span class="badge badge-dark">36</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="list-img"><img src="assets/images/comment4.jpg" alt=""></span>
                            </td>
                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                            </td>
                            <td>+01 3214 6522</td>
                            <td>chadengle@dummy.com</td>
                            <td>Australia</td>
                            <td>
                                <span class="badge badge-primary">02</span>
                            </td>
                            <td>
                                <span class="badge badge-danger">12</span>
                            </td>
                            <td>
                                <span class="badge badge-success">24</span>
                            </td>
                            <td>
                                <span class="badge badge-dark">36</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
<div class="row">      
    <!-- Recent Activity -->
    <div class="col-lg-7 col-12">
        <div class="dashboard-box activities-box">
            <h4>Recent Activities</h4>
            <ul>
                <li>
                    <i class="far fa-calendar-alt"></i> 
                    <small>5 mins ago</small>
                    <h5>Jane has sent a request for access</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
                <li>
                    <i class="far fa-calendar-alt"></i>
                    <small>5 mins ago</small>
                    <h5>Williams has just joined Project X</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
                <li>
                    <i class="far fa-calendar-alt"></i>
                    <small>5 mins ago</small>
                    <h5>Williams has just joined Project X</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
                <li>
                    <i class="far fa-calendar-alt"></i> 
                    <small>25 mins ago</small>
                    <h5>Kathy Brown left a review on Hotel</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
                <li>
                    <i class="far fa-calendar-alt"></i> 
                    <small>25 mins ago</small>
                    <h5>Kathy Brown left a review on Hotel</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
                <li>
                    <i class="far fa-calendar-alt"></i>
                    <small>5 mins ago</small>
                    <h5>Williams has just joined Project X</h5>
                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="dashboard-box report-list">
            <h4>Reports</h4>
            <div class="report-list-content">
                <div class="date">
                    <h5>Auguest 12</h5>
                </div>
                <div class="total-amt">
                    <strong>$1250000</strong>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2356</td>
                            <td>dummy text </td>
                            <td>6,200.00</td>
                        </tr>
                        <tr>
                            <td>4589</td>
                            <td>Lorem Ipsum</td>
                            <td>6,500.00</td>
                        </tr>
                        
                        <tr>
                            <td>3269</td>
                            <td>specimen book</td>
                            <td>6,800.00</td>
                        </tr>                                                    
                        <tr>
                            <td>5126</td>
                            <td>Letraset sheets</td>
                            <td>7,200.00</td>
                        </tr>
                        <tr>
                            <td>7425</td>
                            <td>PageMaker</td>
                            <td>5,900.00</td>
                        </tr>
                        <tr>
                            <td>7425</td>
                            <td>PageMaker</td>
                            <td>5,900.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
