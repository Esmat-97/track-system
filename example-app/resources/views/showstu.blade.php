

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <button type="submit">delete</button>
  </form>
</td>

@endforeach
    </tr>
</table>

</body>
</html>


