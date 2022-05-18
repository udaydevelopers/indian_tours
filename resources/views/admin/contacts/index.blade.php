
@extends('layouts.admin')


@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="col-lg-12 margin-tb">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Contact us Enquiry List</h4>
                    <p>contact us submitted by users</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact) 
                                <tr>
                                <td>{{ ++$i }}</td>
                                <td> 
                                    </span><span class="package-name">{{ $contact->name }}</span>
                                </td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
  
                                <td>
                
                                <a href="#"
                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                    <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                </a>
                                    {!! Form::open(['id'=> 'delete-form','method' => 'DELETE','route' => ['admin.contacts.destroy', $contact->id],'style'=>'display:inline']) !!}
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
                    {!! $contacts->render() !!}
                </div>
            </div>
@endsection