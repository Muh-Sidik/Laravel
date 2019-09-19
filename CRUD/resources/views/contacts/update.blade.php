@extends('layouts.basic')

@section('basic')

{{-- form --}}
<div class="container">
    <div class="row">
      <div class="col-6">

      <form action="{{route('edit')}}" method="POST">
          @csrf
            <input type="hidden" name="id" id="id" value="{{$contactData->id}}">
            <div class="form-group">
              <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$contactData->name_contact}}" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{$contactData->email}}" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control rounded-0" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat">{{$contactData->address}}</textarea>
            </div>
            <button type="submit" class="btn btn-info">Simpan Data</button>

        </form>
      </div>
    </div>
  </div>

@endsection