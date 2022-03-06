@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Create New Role</a>
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
                    <h4>Roles</h4>
                    <p>User Roles for access admin pages content</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Role Name</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                <td>{{ ++$i }}</td>
                                    <td>
                                    {{ $role->name }}
                                    </td>
                                    <td>
                                        
                                        
            <a class="" href="{{ route('admin.roles.show',$role->id) }}"><span class="badge badge-info"><i class="fas fa-info-circle"></i> </span</a>
            @can('role-edit')
            <a class="" href="{{ route('admin.roles.edit',$role->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                
                    {!! Form::submit('Delete', ['class' => 'badge badge-danger']) !!}<span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
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
{!! $roles->render() !!}

@endsection