
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
                        <form id="delete-form" action="{{ route('admin.contacts.delete.all') }}" method="post">
                            @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="padding-bottom:25px;"><input type="checkbox" value="1" name="check_all" id="checkAll"></th>
                                    <th>#sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <!--<th>action</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact) 
                                
                                <tr>
                                <td><input type="checkbox" value="{{$contact->id}}" name="ids[]"></td>
                                <td>{{ ++$i }}</td>
                                <td> 
                                    </span><span class="package-name">{{ $contact->name }}</span>
                                </td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
  
                                <!--<td>-->
                
                                <!--<a href="#" class="show_confirm"-->
                                <!--       onclick="event.preventDefault(); -->
                                <!--                     " data-toggle="tooltip" title='Delete'>-->
                                <!--        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>-->
                                <!--    </a>-->
                                    
                                <!--    {!! Form::submit('Delete', ['class' => 'badge badge-danger']) !!}-->
                                    
                                    
                                <!--</td>-->
                                </tr>
                                
                                @endforeach
                                <tr><td colspan="5"><button type="submit" onclick="event.preventDefault();" data-toggle="tooltip" class="show_confirm btn btn-danger float-right">Delete All</button></td></tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    {!! $contacts->render() !!}
                </div>
            </div>
            <style>
input[type=checkbox] {
    position: absolute;
    z-index: 0;
    opacity:  1 !important;
}
            </style>
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
  
  $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
@endsection