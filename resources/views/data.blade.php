@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    
    <div class="container">
      <a href="/tambahdata" class="btn btn-success">Tambah +</a>
      <div class="row">
        @if ($message = Session::get('succes'))
        <div class="alert alert-success" role="alert">
          {{ $message}}
       </div>
        @endif
          <table class="table" borde>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">NoHP</th>
                  <th scope="col">dibuat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
    
              @foreach ($nma as $row)
              
              <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->nohp }}</td>
                <td>{{ $row->created_at->format('D M Y') }}</td>
                <td>
                    <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-info">Update</a>
                </td>
              </tr>
    
              @endforeach
    
              </tbody>
            </table>
      </div>
    </div>
  </div>

@endsection