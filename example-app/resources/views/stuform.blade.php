<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<form class="row g-3" method="POST" action="/save" enctype="multipart/form-data">

  @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" >id</label>
    <input type="text" class="form-control" name="id" id="inputEmail4" value="{{old('id')}}">
    @error('id')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" >name</label>
    <input type="text" class="form-control" name="name" id="inputEmail4" value="{{old('name')}}">
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>



  <div class="col-12">
    <label for="inputAddress" class="form-label" >email</label>
    <input type="text" class="form-control" name="email" id="inputAddress" value="{{old('email')}}" >
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
 

  <div class="col-12">
    <label for="inputAddress" class="form-label">grade</label>
    <input type="number" class="form-control" name="grade" id="inputAddress"  value="{{old('grade')}}">
    @error('grade')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label">image</label>
    <input type="file" class="form-control" name="image" id="inputAddress"  value="{{old('image')}}">
    @error('image')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>

  <select class="form-select" name="track_id" aria-label="Default select example">
@foreach($peo as $x)
  <option value="{{$x['id']}}">{{$x['tilte']}}</option>

@endforeach
</select>



  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</html> 