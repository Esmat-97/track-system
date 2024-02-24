<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<h1>people</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
    </tr>


    <tr>
<td>{{$data["id"]}}</td>
<td>{{$data["name"]}}</td>
<td>{{$data["Email"]}}</td>

    </tr>
</table>

</body>
</html>

