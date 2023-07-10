@extends('pages.crudadminrentalmobil.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HASIL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">HASIL</li>
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
                <h3 class="card-title">Hasil - SAW</h3>
              </div>
              {{-- <!-- /.card-header -->
              <div class="card-body">
                <a href="/dashboard/rental/armadas/create" class="btn-sm btn-success">Tambah Data Rental +</a>
                <br/><br/> --}}

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    {{-- <th>Alternatif</th> --}}
                    <th>Nilai_akhir</th>
                    <th>Alternatifs</th>
                    <th>Merk</th>
                    {{-- <th>Waktupenyewaan</th>
                    <th>Kapasitasbensin</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                @foreach($hasil as $hasil)
                  <tr>
                    <td>{{ $hasil->nilai_akhir }}</td>
                    <td>{{ $hasil->alternatifs }}</td>
                    <td>{{ $hasil->merk}}</td>
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
