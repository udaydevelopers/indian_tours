
@extends('layouts.admin')


@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="col-lg-12 margin-tb">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Packages List</h4>
                    <p>Nonummy hac atque adipisicing donec placeat pariatur quia ornare nisl.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Destination</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        </span><span class="package-name">Singapore Holiday Tour</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        </span><span class="package-name">New Year‘s Eve in Paris</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        </span><span class="package-name">Paris Honeymoon Tour</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        </span><span class="package-name">Japan Holiday Tour</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        </span><span class="package-name">California Trip</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        </span><span class="package-name">Dubai Tour</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    <nav class="pagination-inner">
                        <ul class="pagination disabled">
                            <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
@endsection