@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>
                <div class="card-body"> 
                <input type="text" id="search"class="form-control" placeholder="search" />
                <table class="table table-striped">
   <thead>
   <div class="panel-body">
    <tr>  
      <th scope="col"><center>ID Number</center></th>
      <th scope="col"><center>Last Name</center></th>
      <th scope="col"><center>First Name</center></th>
      <th scope="col"><center>Course</center></th>
      <th scope="col"><center>Year Level</center></th>
      <th scope="col"><center>Email</center></th>
      <th scope="col"><center>Role</center></th>
      <th scope="col"><center>Actions</center></th>
    </tr>
  </thead>
  <tbody id="dynamic-row">
  @foreach($users as $user)
  <tr>
  <td>{{ $user->idnum }}</td>
  <td>{{ $user->lname }}</td>
  <td>{{ $user->fname }} {{ $user->mname }}</td>
  <td>{{ $user->course }}</td>
  <td>{{ $user->year }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
  <td><a href="{{ route('admin.users.edit', $user->id) }}" class="float-left">
  <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
  <a href="{{ route('admin.impersonate', $user->id) }}" class="float-left">
  <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a>
  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="float-left">
                {{ method_field('DELETE') }}
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </form>
  </td>
  </tr>
  @endforeach
  </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
<a href="{{ url('home') }}"><button class="complete">Back to menu</button></a>
</div>
<script type="text/javascript">
$('body').on('keyup', '#search', function(){
    var searchQuest = $(this).val();

    $.ajax({
            method:'POST',
            url:"{{route ('admin.users.index.action') }}",
            dataType:'json',
            data: {
                '_token': '{{ csrf_token() }}',
                searchQuest: searchQuest,
            },
            success:function(res){
                var tableRow = '';
                $('#dynamic-row').html('');

                $.each(res, function(index, value){
                    tableRow = '<td>'+value.idnum+'</td><td>'+value.lname+'</td><td>'+value.fname+'</td><td>'+value.course+'</td><td>'+value.year+'</td><td>'+value.email+'</td><td>'+value.roles+'</td>><td>'+value.action+'</td></tr>';
                    $('#dynamic-row').append(tableRow);
                });
            }
        });
    });
 </script>
@endsection