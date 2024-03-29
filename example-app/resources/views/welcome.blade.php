<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      img{
        width: 500px;
        margin-left :250px;
      }
     
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/form">addstudents</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/home">home</a>
        </li>
        @can('is-inst')
      
        <li class="nav-item">
   
          <a class="nav-link" href="/data">students</a>
        </li>

        <li>
        <a class="nav-link" href="/category/form">addcategory</a>
        </li>

        
        <li>
        <a class="nav-link" href="/category/data">category</a>
        </li>

        <li>
        <a class="nav-link" href="/user/data">instructors</a>
        </li>
@endcan
      </ul>

    </div>
  </div>
</nav>



<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('imgs/download (1).png')}}" alt="Los Angeles" class="d-block" >
    </div>
    <div class="carousel-item">
      <img  src="{{asset('imgs/download (2).png')}}" alt="Chicago" class="d-block ">
    </div>
    <div class="carousel-item">
      <img  src="{{asset('imgs/download.png')}}" alt="New York" class="d-block ">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>