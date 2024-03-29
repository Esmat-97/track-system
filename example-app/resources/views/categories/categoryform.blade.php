<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form class="row g-3" method="POST" action="/category/save">

  @csrf



  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" >title</label>
    <input type="text" class="form-control" name="title" id="inputPassword4" value="{{old('title')}}">
    @error('title')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label" >description</label>
    <input type="text" class="form-control" name="description" id="inputAddress" value="{{old('description')}}" >
    @error('description')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
 


  <div class="col-12">
    <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>
</body>
</html>