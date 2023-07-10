@extends('pages.crudadminrentalmobil.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Rental </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data Rental</li>
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
                <h3 class="card-title">Data Rental</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/dashboard/rental/armadas/create" class="btn-sm btn-success">Tambah Data Rental +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor Polisi </th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Kapasitas</th>
                    <th>warna</th>
                    <th>Mesin</th>
                   <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($mobils as $mobil)
                  <tr>
                    <td>{{ $mobil->nomor_polisi }}</td>
                    <td>{{ $mobil->merk }}</td>
                    <td>{{ $mobil->tipe }}</td>
                    <td>{{ $mobil->kapasitas }}</td>
                    <td>{{ $mobil->warna }}</td>
                    <td>{{ $mobil->mesin }}</td>
                    <td>
                      <a href="/dashboard/rental/armadas/{{ $mobil->id }}/edit" class="btn-xs btn-primary">Edit</a>
                      <form action="/dashboard/rental/armadas/{{ $mobil->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn-xs btn-danger" onclick="return confirm('Yakin akan dihapus?')">Delete</button>
                    </td>
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
