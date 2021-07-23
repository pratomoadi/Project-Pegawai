@extends('layouts.master')

@section('content')
    @include('layouts.navbar')
    @include('layouts.sidebar')

     <!-- Main Content -->
     <div class="main-content">
        @if (session('status'))
    		    <div class="alert alert-danger">
    		        {{ session('status') }}
    		    </div>
		    @endif
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="/" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Employee</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/">Data Pegawai</a></div>
              <div class="breadcrumb-item">Tambah Data Pegawai</a></div>   
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Input Data Pegawai</h2>
            <p class="section-lead">
              Data Pegawai yang diinputkan tidak boleh ada field yang kosong.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Input Data Pegawai</h4>
                  </div>
                  <form action="/store" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Induk Pegawai</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('nomor_induk') is-invalid @enderror" id="nomor_induk" name="nomor_induk" value="{{ old('nomor_induk') }}" required>
                      </div>
                    </div>
                    @error('nomor_induk')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pegawai</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"  value="{{ old('nama') }}" required>
                      </div>
                    </div>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat Pegawai</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  value="{{ old('alamat') }}" required>
                      </div>
                    </div>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                      <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control datepicker @error('tanggal_lahir') is-invalid @enderror"  name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                      </div>
                    </div>
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Bergabung</label>
                      <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control datepicker @error('tanggal_bergabung') is-invalid @enderror" name="tanggal_bergabung" id="tanggal_bergabung" value="{{ old('tanggal_bergabung') }}" required>
                      </div>
                    </div>
                    @error('tanggal_bergabung')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Create Employee</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection

@section('js')
<script src="https://demo.getstisla.com/assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="https://demo.getstisla.com/assets/js/page/forms-advanced-forms.js"></script>


@endsection