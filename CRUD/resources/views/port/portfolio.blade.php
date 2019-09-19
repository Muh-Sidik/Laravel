@extends('layouts.basic')

@section('basic')

    <style>
        section {
          min-height: 420px;
        }
        footer {
          margin-top: 20px;
          padding-top: 20px;
        }
        hr {
        width: 700px;
        border-top: 2px solid #EEEEEE;
        }
      </style>

<!--Navbar -->
<nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark info-color">
  <div class="container">
  <a class="navbar-brand" href="#">Muhammad Sidik</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
        aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse smooth-scroll" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="https://www.linkedin.com/in/muhammad-sidik-853ab7160/">
                  <i class="fab fa-linkedin-in"></i>
                  <!-- https://www.linkedin.com/in/muhammad-sidik-853ab7160/ -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="https://github.com/Muh-Sidik">
                  <i class="fab fa-github"></i>
                  <!-- https://github.com/Muh-Sidik -->
                </a>
              </li>
          <li class="nav-item avatar">
            <a class="nav-link p-0" href="#">
              <img src="{{asset('img/2.jpg')}}" class="rounded-circle z-depth-0"
                alt="avatar image" height="35">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--/.Navbar -->

<!-- Jumbotron -->
<div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
  <div class="text-white text-center rgba-stylish-strong py-5 px-5">
    <div class="py-5">

      <!-- Content -->
      <img src="{{ asset('img/1.jpeg') }}" width="22%" class="rounded-circle img-thumbnail animated slideInDown">
          <h1 class="animated fadeIn slow">Muhammad Sidik</h1>
          <h2 class="animated fadeIn slow"> | Full Stack Developer | </h2>
          <hr>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h4>PHP</h4>
              </div>
              <div class="carousel-item">
              <h4>JavaScript</h4>
              </div>
              <div class="carousel-item">
                <h4>Python</h4>
              </div>
              <div class="carousel-item">
                <h4>GO</h4>
              </div>
              <div class="carousel-item">
                <h4>Bootstrap</h4>
              </div>
              <div class="carousel-item">
                <h4>MdBootstrap</h4>
              </div>
              <div class="carousel-item">
                <h4>Laravel</h4>
              </div>
              <div class="carousel-item">
                <h4>CodeIgniter</h4>
              </div>
            </div>
          </div>
      
    </div>
  </div>
</div>
<!-- Jumbotron -->

<!-- About -->
  <!-- judul -->
<section id="about" class="about mt-4">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
        <h2>About</h2>
      </div>
    </div>
  <!-- desc1 -->
    <div class="row justify-content-center">
      <div class="col-md-5 text-justify">
        <p>Maka bersabarlah engkau, sesungguhnya janji Allah itu benar, meskipun Kami perlihatkan kepadamu sebagian siksa yang Kami ancamkan kepada mereka, ataupun Kami wafatkan engkau (sebelum ajal menimpa mereka). Namun kepada Kamilah mereka dikembalikan. – (Q.S Ghafir: 77).</p>
      </div>
    
    <!-- desc desc2 -->
      <div class="col-md-5 text-justify">
        <p>Barangsiapa menyangka bahwa Allah tidak akan menolongnya di dunia dan di akhirat, maka hendaklah dia merentangkan tali ke langit-langit, lalu menggantung (diri), kemudian pikirkanlah apakah tipu dayanya itu mampu melenyapkan apa yang menyakitkan hatinya. – (Q.S Al-Hajj: 15).</p>
      </div>
    </div>
</div>
</section>

<!-- Akhir About -->

<!-- portfolio -->
<section id="portfolio" class="portfolio bg-light pb-4">
<div class="container">
  <div class="row mb-4 pt-4">
    <div class="col text-center">
      <h2>Portfolio</h2>
    </div>
  </div>
  <!-- baris pertama -->
  <div class="row mb-4">
    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/2.jpg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">InsyaAllah Fullstack Developer</p>        
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/1.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Membela Agama Allah dan Sesama Muslim.</p>        
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/3.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Menatap masa depan untuk mengerti sebuah perjuangan.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- baris kedua -->
  <div class="row mb-4">
  <div class="col-md">
      <div class="card">
        <img src="{{asset('img/11.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Cinta tanah dengan terus menjadi generasi yang membanggakan.</p>
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card">
        <img src="{{asset('img/5.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Terus melangkah dan tidak menatap kesedihan.</p>
        </div>
      </div>
    </div>
    
    <div class="col-md">
      <div class="card">
        <img src="{{('img/6.jpeg')}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Bersiap untuk kesuksesan.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- akhir portfolio -->

<!-- contact -->

<section id="contact" class="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact Us</h2>
      </div>
    </div>

        <div class="row justify-content-center">

          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <a class="px-2 fa-lg tw-ic"><i class="fab fa-whatsapp"></i></a>
                <a class="px-2 fa-lg tw-ic"><i class="fab fa-instagram"></i></a>
                <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                <a class="px-2 fa-lg email-ic"><i class="fab fa-github"></i></a>
              </div>
            </div>
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center"><h3>My Base</h3></li>
                <li class="list-group-item">Back End Division</li>
                <li class="list-group-item">Pondok Programmer</li>
                <li class="list-group-item">Kretek, Bantul, Yogyakarta</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="nomor">No.Telpon</label>
                <input type="number" class="form-control" id="nomor" placeholder="Masukkan Nomor">
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control rounded-0" id="pesan" rows="3" placeholder="Pesan Terbaik Anda"></textarea>
              </div>
              <button type="button" class="btn btn-info">Kirim</button>
            </form>
        </div>
      </div>
  </div>
</section>

<!-- akhir Contact -->


<!-- footer -->

<footer class="bg-info text-white">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <p>Copyright 2019</p>
    </div>
  </div>
</div>
</footer>

<!-- akhir footer -->


@endsection