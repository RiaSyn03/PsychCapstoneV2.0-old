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
</tr>
@endforeach



</table>
</body>
</html>