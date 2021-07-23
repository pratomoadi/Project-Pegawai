@extends('layouts.master')

@section('content')
    @include('layouts.navbar')      
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
            <div class="section-header">
                <h1>Halaman Daftar Pegawai</h1>
                <div class="section-header-button">
                    <a href="/create" class="btn btn-primary">Add New</a>
                </div>
                <!-- Breadcrumb -->
                <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Daftar Pegawai</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tabel Seluruh Pegawai</h2>
                <!-- card wrapper -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-6 col-md-12 col-lg-12">
                        <div class="card card-info">
                            <!-- card header -->
                            <div class="card-header">
                                <!-- card title -->
                                <h4>Data Pegawai</h4>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table id="usersTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th style="width:150px;">Nama Pegawai
                                            </th>
                                            <th style="width:300px;">Alamat Pegawai</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Bergabung</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->nomor_induk}}</td>
                                            <td>{{$user->nama}}
                                            </td>
                                            <td>
                                                {{$user->alamat}}
                                            </td>
                                            <td>{{$user->tanggal_lahir}}</td>
                                            <td>{{$user->tanggal_bergabung}}</td>
                                            <td> 
                                                <a href="/show/{{$user->nomor_induk}}" class="btn btn-sm btn-info btn-flat pull-left">Detail</a>
                                                <form action="/delete/{{$user->nomor_induk}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger btn-flat pull-left">Delete</a>
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Your content goes here -->
            </div>
        </section>
    </div>
@endsection

@section('js')
<!-- For DataTables -->
<!-- <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->

<!-- <script>
    $(function () {
        $('#usersTable').DataTable()
    });
</script> -->
@endsection