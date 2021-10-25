<!DOCTPE html>
<html>
<head>
<title>List of Time</title>
</head>
<body>
<table border = "1">
<tr>
<td>Time </td>
</tr>
@foreach ($timeslots as $ts)
<tr>
<td>{{ $ts->time }}</td>
</tr>
@endforeach
</table>
</body>
</html>

