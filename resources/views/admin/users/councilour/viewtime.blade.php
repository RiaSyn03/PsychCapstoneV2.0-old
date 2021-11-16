@extends('layouts.app')

@section('content')
<title>List of Time</title>
</head>
<body>
<table class="table table-striped">
<thead>
<tr>
<td>ID Number </td>
<td>Time </td>
</tr>
</thead>
<tbody id="dynamic-row">
@if (is_array($timescheds))
@foreach($timescheds as $t)
<tr>
<td>{{ $t->idnum }}</td>
<td>{{ $t->time }}</td>
</tr>
@endforeach
@endif
</tbody>
</table>
</body>
@endsection


