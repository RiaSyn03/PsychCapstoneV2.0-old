@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>Manage User</center>
                <div class="form-group row">
                            Name:  {{ $user->name }} <br> 
                            Email: {{ $user->email }} <br>                  
                            </div>

                <div class="card-body">
                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                @foreach($roles as $role)
                
                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                       {{ $user->hasAnyRole($role->name)?'checked':''}}>
                            {{ $role->name }}</label>
              
                @endforeach
                <button type="submit" class="btn btn-primary">Update
                </button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


