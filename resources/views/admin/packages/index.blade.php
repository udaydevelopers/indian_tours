
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
<form class="form-inline" method="GET">
  <div class="form-group col-sm-8 mb-5">
    <label for="filter" class="col-sm-8 col-form-label">Search by package name</label>
    <input type="text" class="form-control" id="filter" name="filter" placeholder="Product name..." value="{{ $filter }}">
  </div>
  <button type="submit" class="btn btn-info mb-2">Search</button>
</form>
                    
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
                                    <strong>{{ ++$i }}</strong>. <span class="package-name">{{ $package->name }}</span>
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
                                    <a href="#" class="show_confirm"
                                       onclick="event.preventDefault(); 
                                                     " data-toggle="tooltip" title='Delete'>
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
                <div class="p-2 text-info">
                    <p>
                        Displaying {{$packages->count()}} of {{ $packages->total() }} package(s).
                    </p>

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