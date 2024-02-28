<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<form class="row g-3" method="POST" action="/update/{{$data['id']}}">

@method('put')

  @csrf

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" >name</label>
    <input type="text" class="form-control" name="name" id="inputPassword4" value="{{$data['name']}}"">
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>


  <div class="col-12">
    <label for="inputAddress" class="form-label" >email</label>
    <input type="text" class="form-control" name="email" id="inputAddress"  value="{{$data['Email']}}"" >
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
 

  <div class="col-12">
    <label for="inputAddress" class="form-label">grade</label>
    <input type="number" class="form-control" name="grade" id="inputAddress"   value="{{$data['grade']}}">
    @error('grade')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</html>