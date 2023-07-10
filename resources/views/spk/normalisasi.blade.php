@extends('pages.crudadminrentalmobil.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>NORMALISASI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">NORMALISASI</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Normalisasi</h3>
              </div>
              {{-- <!-- /.card-header -->
              <div class="card-body">
                <a href="/dashboard/rental/armadas/create" class="btn-sm btn-success">Tambah Data Rental +</a>
                <br/><br/> --}}

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Alternatif</th>
                    <th>Harga</th>
                    <th>Kecepatan</th>
                    <th>Kapasitasorang</th>
                    <th>Waktupenyewaan</th>
                    <th>Kapasitasbensin</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($normalisasis as $normalisasi)
                  <tr>
                    <td>{{ $normalisasi->alternatifs }}</td>
                    <td>{{ $normalisasi->harga }}</td>
                    <td>{{ $normalisasi->kecepatan }}</td>
                    <td>{{ $normalisasi->kapasitasorang }}</td>
                    <td>{{ $normalisasi->waktupenyewaan }}</td>
                    <td>{{ $normalisasi->kapasitasbensin}}</td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
