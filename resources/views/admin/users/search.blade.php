@extends('layouts.app')

@section('content')

<br />
<div class="container box">
<h3 align="center">Live search in laravel using AJAX</h3><br/>
<div class="panel panel-default">
<div class="panel-heading">Search Customer Data</div>
<div class="panel-body">
<div class="form-group">
   <input type="text" name="search" id="search"class="form-control" placeholder="search" />
   </div>
   <div class="table-responsive">
   <h3 align="center"> Total Data : <span id="total_records"></span></h3>
   <table class="table table-striped table-bordered">
   <thead>
   <tr>
   <th>Name</th>
   <th>Email</th>
   </tr>
   </thead>
   <tbody>
   @foreach($users as $user)
   <tr>
   <td>{{ $user->name }}</td>
   <td>{{ $user->email }}</td>
   </tr>
    @endforeach
   </tbody>
   </table>
   </div>
   </div>
   </div>
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
                console.log(res)
            }
        });
    });

 </script>
@endsection