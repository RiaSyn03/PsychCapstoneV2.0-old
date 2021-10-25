@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Students</div>
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
    </tr>
  </thead>
  <tbody id="dynamic-row">
  @foreach($users as $user)
  if($user->roles() == 'student')
  {
    for(i=0; i<=$user; i++)
  <tr>
  <td>{{ $user->idnum }}</td>
  <td>{{ $user->lname }}</td>
  <td>{{ $user->fname }} {{ $user->mname }}</td>
  <td>{{ $user->course }}</td>
  <td>{{ $user->year }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
  </tr>
  }
  @endforeach
  </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    @endsection