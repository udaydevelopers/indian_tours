@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right" style="float: right; padding: 5px;">
        @can('tag-create')
            <a class="btn btn-success" href="{{ route('admin.tags.create') }}"> Create New tag</a>
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
                    <h4>Tags</h4>
                    <p>Blog all tags list</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Taq Name</th>
                                    <th>Slug</th>
                                    <th>Created at</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tags as $key => $tag)
                                <tr>
                                <td>{{ ++$i }}</td>
                                    <td>
                                    {{ $tag->name }}
                                    </td>
                                    <td>
                                    {{ $tag->slug }}
                                    </td>
                                    <td>
                                    {{ $tag->created_at->diffForHumans() }}
                                    </td>
                                    <td style="width: 105px;">
                                        
            @can('tag-edit')
            <a class="" href="{{ route('admin.tags.edit',$tag->id) }}"><span class="badge badge-success"><i class="far fa-edit"></i></span></a>
            @endcan
            @can('tag-delete')
            <a href="#" class="show_confirm"
            onclick="event.preventDefault(); 
                            " data-toggle="tooltip" title='Delete'>
            <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
            </a>
                {!! Form::open(['id' => 'delete-form', 'method' => 'DELETE','route' => ['admin.tags.destroy', $tag->id],'style'=>'display:inline']) !!}
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
{!! $tags->render() !!}

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