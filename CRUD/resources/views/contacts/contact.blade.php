@extends('layouts.basic')

@section('basic')

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

      <!-- Navbar brand -->
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
    
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
    
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Data</a>
          </li>
    
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Lainnya</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Santri Nilai Teringgi</a>
              <a class="dropdown-item" href="#">Santri Nilai Terendah</a>
              <a class="dropdown-item" href="#">Hubungi Kami</a>
            </div>
          </li>
    
        </ul>
        <!-- Links -->
          <ul class="navbar-nav ml-auto">

              <li class="nav-item ml-auto">
                  <a class="nav-link" href="#">Log out</a>
              </li>

          </ul>
        
      <!-- Collapsible content -->
    </div>
  </nav>
  <!--/.Navbar-->

<div class="container text-center">
    <h2 class="mt-3 mb-3">Data Santri</h2>
  
  <div class="col">

  </div>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name_contact}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->address}}</td>
            <td>
                <a class="btn btn-success" href="{{route('update', $value->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('delete', $value->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
    </div>
    
    {{-- form --}}
  <div class="container">
    <div class="row">
      <div class="col-6">

        <form action="{{route('create')}}" method="POST">
          @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control rounded-0" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Simpan Data</button>

        </form>
      </div>
    </div>
  </div>
    
  


@endsection