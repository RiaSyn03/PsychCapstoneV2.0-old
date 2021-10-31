@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>Manage Questions</center>
                <div class="form-group row">
                            ID:  {{ $question->id }} <br> 
                            Category: {{ $question->category_type }} <br>    
                            Type: {{ $question->type }} <br>
                            Question: {{ $question->question }} <br>    
                            </div>
                <div class="card-body">
                <form action="{{ route('admin.users.update', ['question' => $question->id]) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                @foreach($questions as $question)
                
                <input type="text" name="question" value="{{ $question->id }}"
                       {{ $user->hasAnyRole($role->name)?'checked':''}}>
                            {{ $role->name }}</label>
                            
                            <input id="question" type="text" name="question" placeholder="Add a Question">Question</input>
              
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


