@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
        @can('category-create')
            <a class="btn btn-success" href="{{ route('admin.categories.create') }}"> Create New Category</a>
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
                    <h4>Categories</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Parent Category Name</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
            @foreach ($data as $key => $category)
                <tr>
                <td>{{ ++$i }}</td>
                    <td>
                    {{ $category->name }}
                    </td>
                    <td>
                    @if ($category->parent)
                        {{ $category->parent->name}}
                    @endif           
                    <td>
                                                
            <a class="" href="{{ route('admin.categories.show',$category->id) }}"><span class="badge badge-info"><i class="fas fa-info-circle"></i> </span</a>
            @can('category-edit')
            <a class="" href="{{ route('admin.categories.edit',$category->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
            @endcan
            @can('category-delete')
            <a href="#" class="show_confirm"
                                       onclick="event.preventDefault(); 
                                                     " data-toggle="tooltip" title='Delete'>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </a>
                {!! Form::open(['id'=> 'delete-form','method' => 'DELETE','route' => ['admin.categories.destroy', $category->id],'style'=>'display:inline']) !!}
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
{!! $data->render() !!}
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