@extends('layouts.app')

@section('content')
<!DOCTPE html>
<html>
<head>
<title>List of Questions</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID </td>
<td>CATEGORY</td>
<td>TYPE OF QUESTION</td>
<td>QUESTION</td>
<td>ACTIONS</td>
</tr>
@foreach ($questions as $question)
<tr>
<td>{{ $question->id }}</td>
<td>{{ $question->category_type}}</td>
<td>{{ $question->type }}</td>
<td>{{ $question->question }}</td>
<td><a href="{{ route('admin.users.edit', $question->id) }}" class="float-left">
  <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
  <a href="{{ route('admin.impersonate', $question->id) }}" class="float-left">
  <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a>
  <form action="{{ route('admin.users.destroy', $question->id) }}" method="POST" class="float-left">
                {{ method_field('DELETE') }}
                @csrf
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </form>
</tr>
@endforeach
</table>
</body>
</html>
@endsection