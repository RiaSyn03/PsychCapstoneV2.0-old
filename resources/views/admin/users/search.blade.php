@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>
                <div class="card-body"> 
                <table class="table table-striped">
   <thead>
   <div class="panel-body">
   <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
   <input type="search" name="query" class="form-control m-sm-2" placeholder="search user"></div>
   <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button></form>
    <tr>  
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  <tr>
  <th>{{ $user->name }}</th>
  <th>{{ $user->email }}</th>
  <th>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</th>
  <th><a href="{{ route('admin.users.edit', $user->id) }}" class="float-left">
  <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
  <a href="{{ route('admin.impersonate', $user->id) }}" class="float-left">
  <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a>
  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="float-left">
                {{ method_field('DELETE') }}
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </form>

  </th>
  </tr>
  @endforeach
  </tbody>
</table>

@endsection