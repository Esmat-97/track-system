
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
  <div class="col  ">
    <div class="card h-100 ">
      <div class="card-body bg-info ">
      <div class="card-header">categories</div>
        <h5 class="card-title ">{{$data["id"]}}</h5>
        <p class="card-text">{{$data["tilte"]}}</p>
        <p class="card-text">{{$data["description"]}}</p>
        <p class="card-text">{{$data["updated_at"]}}</p>
        <p class="card-text">{{$data["created_at"]}}</p>
      </div>
    </div>
  </div>
  </div>

 
</body>
</html>


