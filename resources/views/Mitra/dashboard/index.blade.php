<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard Mitra</title>
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#7AC678;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class="logo" src="https://drive.google.com/uc?export=view&id=1zsX29peLxMzYsdWqq9zcYBtmUTwXIv8n" width="100"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0" style="background-color:#7AC678;color:blue;">Logout <span data-feather="log-out"></span></button>

      </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#7AC678;">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Data Wisata
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="database"></span>
              Data Ulasan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="help-circle"></span>
              Customer Service
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Wisata</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" style="color:#7AC678; ">
                <a class="nav-link active" aria-current="page" href="/TambahWisata" >Tambah Wisata</a>
            </button>
            
          </div>
        </div>
      </div>

      <div class="row my-2">
 
      @foreach ($wisata as $item)
      
      <div class="col-md-4 col-sm-12 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('images/'.$item->picture)}}" value="logo" class="card-img-top" alt="..." style="height:250px">
            
            <div class="card-body" style="height:200px">
              <h5 class="card-title">{{ $item->title}}</h5>
              <p class="card-text">{{ $item->desc}}</p>
              <a href="{{url('/Detail/'.$item->id_wisata)}}" class="btn btn-primary" style='margin-top: auto;'>Detail <span data-feather="arrow-right"></span></a>
              <a href="{{url('/Detail/'.$item->id_wisata)}}" class="btn btn-warning" style='margin-top: auto; margin-left:30px;'>{{$item->status}} </a>
            </div>
          </div>
      </div>

      @endforeach
      
      
          
        </div>

    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
