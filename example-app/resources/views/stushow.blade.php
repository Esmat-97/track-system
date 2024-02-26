

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>  
table, th, td {  
  border: 1px solid black;  
  border-collapse: collapse;  
}  
th, td {  
  padding: 10px;  
}  
table tr:nth-child(even) {  
  background-color: #eee;  
}  
table tr:nth-child(odd) {  
  background-color: #fff;  
}  
table th {  
  color: white;  
  background-color: gray;  
}  
</style>  
<body>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>delete</th>
        <th>edit</th>
    </tr>

@foreach($peo as $x)
    <tr>
<td>{{$x["id"]}}</td>
<td>{{$x["name"]}}</td>
<td>{{$x["Email"]}}</td>
<td>
  <form method="POST" action="/destroy/{{$x['id']}}">
    @csrf 
    @method("delete")
    <button type="submit" class="btn btn-danger">delete</button>
  </form>
</td>
<td>
  <a href="/edit/{{$x['id']}}" class="btn btn-warning">edit</a>
</td>

@endforeach
    </tr>
</table>

</body>
</html>


