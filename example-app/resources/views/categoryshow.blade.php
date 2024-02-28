
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>  

</style>  
<body>



<div class="row row-cols-1 row-cols-md-3 g-4 ">

@if(isset($tra))
@foreach($tra as $x)
  <div class="col  ">
    <div class="card h-100 ">
      <div class="card-body bg-info ">
      <div class="card-header">categories</div>
        <h1 class="card-text">{{$x["tilte"]}}</h1>
        <p class="card-text">{{$x["description"]}}</p>
        <p class="card-text">{{$x["updated_at"]}}</p>
        <p class="card-text">{{$x["created_at"]}}</p>

        @foreach($x->students as $item)
        <p class="card-text">{{$item->name}}</p>
        @endforeach


        <a href="/category/edit/{{$x['id']}}" class="btn btn-warning">Edit</a>
        <a href="/category/detail/{{$x['id']}}" class="btn btn-primary">Show</a>
        <form method="POST" action="/category/destroy/{{$x['id']}}">
    @csrf 
    @method("delete")
    <button type="submit" class="btn btn-danger">delete</button>
  </form>
      </div>
    </div>
  </div>
  @endforeach 
  @endif



  </div>

 
</body>
</html>


