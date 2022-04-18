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

  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#f7f7f7;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class="logo" src="https://drive.google.com/uc?export=view&id=1zsX29peLxMzYsdWqq9zcYBtmUTwXIv8n" width="140"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0" style="background-color:#f7f7f7;color:#7AC678;">Logout <span data-feather="log-out"></span></button>

        </form>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:#f7f7f7;">
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
          <h1 class="h2">Mitra Partner</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a class="nav-link active" aria-current="page" href="/TambahWisata" style="color:#7AC678;">Tambah Wisata</a>
              </button>

            </div> --}}
          </div>

        </div>
        <div class="row" style="margin-top:50px; margin-left:50px;">
          <div class="col-md-10">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-body">
                <h3 class="card-title text-center">Tambah Wisata</h3>
                
                <hr style="position: relative;
                top: 20px;
                border: none;
                height: 3px;
                background: #5bc0de;
                margin-bottom: 50px;">
                <form method="POST" action="/TambahWisata" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="mb-3">
                    <label for="title" class="form-label" style="font-weight:bold;">Nama Wisata</label>
                    <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" placeholder="Nama Wisata">

                    @error('title')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror


                  </div>
                  <div class="mb-3">
                    <label for="categorie" style="font-weight:bold;">Kategori</label>
                    <select class="form-control @error('categorie')is-invalid @enderror" id="categorie" name="categorie" placeholder="pilih kategori">
                      <option value="">Pilih Kategori</option>
                      <option value="Curug">Curug</option>
                      <option value="Pantai">Pantai</option>
                      <option value="Pemandangan">Pemandangan</option>
                    </select>

                    @error('categorie')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="location" class="form-label" style="font-weight:bold;">Alamat Wisata</label>
                    <input type="text" class="form-control @error('location')is-invalid @enderror" id="location" name="location" placeholder="alamat">

                    @error('location')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="desc" class="form-label" style="font-weight:bold;">Deskripsi</label>
                    <textarea class="form-control @error('desc')is-invalid @enderror" id="desc" rows="3" id="desc" name="desc" placeholder="..."></textarea>

                    @error('desc')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror

                  </div>
                  
                  <div class="mb-3">
                    <label for="picture" class="form-label" style="font-weight:bold;">Gambar</label>
                    <input class="form-control @error('picture')is-invalid @enderror" type="file" id="picture" name="picture">

                    @error('picture')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>

                  <button type="submit" class="btn btn-primary">Tambah Wisata</button>

                </form>

              </div>


            </div>

          </div>

        </div>

      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>
</html>
