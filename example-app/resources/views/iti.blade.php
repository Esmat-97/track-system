@extends('welcome')


<h1>students</h1>


<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>show</th>'
    </tr>
@foreach($stds as $x)
    <tr>
<td></td>
<td>{{$x["name"]}}</td>
<td>{{$x["id"]}}</td>
<td> <img src="{{ asset('imgs/'.$x['img']) }}"  style="width: 20px;"></td>
<td><a href="/three/{{$x['id']}}">show</a></td>
@endforeach
    </tr>
</table>



