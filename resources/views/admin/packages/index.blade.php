
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
                    <p>List of active packages.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Trip</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                <td>
                                    </span><span class="package-name">{{ $package->name }}</span>
                                </td>
                                <td>{{ $package->trip_days }} days {{ $package->trip_nights }}</td>
                                
                                <td>
                                @foreach($package->categories as $category)
                                    {{ $category->name }} 
                                    @if(!$loop->last)
                                    ,
                                    @endif
                                @endforeach  
                                </td>
                                    <td>Adult:{{ $package->adult_sp }}<br/>
                                    Couple:{{ $package->couple_sp }}<br/>
                                    Child:{{ $package->child_sp }}<br/>
                                    Infant:{{ $package->infant_sp }}
                                    </td>
                                    <td>
                                    <a class="" href="{{ route('admin.packages.show',$package->id) }}">
                                        <span class=""><i class="fas fa-info-circle"></i> </span</a>
                                    
                                    @can('package-edit')
                                    <a class="" href="{{ route('admin.packages.edit',$package->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
                                    @endcan
                                    @can('package-delete')
                                    <a href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </a>
                                        {!! Form::open(['id'=> 'delete-form','method' => 'DELETE','route' => ['admin.packages.destroy', $package->id],'style'=>'display:inline']) !!}
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
                <!-- pagination html -->
                <div class="pagination-wrap">
                    {!! $packages->render() !!}
                </div>
            </div>
@endsection