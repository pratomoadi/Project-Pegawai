@extends('layouts.master')

@section('content')
    @include('layouts.navbar')      
    @include('layouts.sidebar')
   <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="/" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail Pegawai</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/">Data Pegawai</a></div>
              <div class="breadcrumb-item">Detail Pegawai</a></div>   
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Overview</h2>
            <p class="section-lead">
              Semua detail data mengenai seorang pegawai.
            </p>

            <div class="row">
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="fas fa-cog"></i>
                  </div>
                  <div class="card-body">
                    <h4>Nomor Induk</h4>
                    <p>{{$user->nomor_induk}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="fas fa-search"></i>
                  </div>
                  <div class="card-body">
                    <h4>Nama</h4>
                    <p>{{$user->nama}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="card-body">
                    <h4>Alamat</h4>
                    <p>{{$user->alamat}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="fas fa-power-off"></i>
                  </div>
                  <div class="card-body">
                    <h4>Tanggal Lahir</h4>
                    <p>{{$user->tanggal_lahir}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div class="card-body">
                    <h4>Tanggal Bergabung</h4>
                    <p>{{$user->tanggal_bergabung}}</p>
                  </div>
                </div>
              </div>
@endsection