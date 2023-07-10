@extends('pages.crudadminrentalmobil.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Nama Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Nama Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mobil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/dashboard/rental/armadas/{{ $mobil->id }}" class="form-horizontal">
                @method('put')
                @csrf

                <div class="card-body">
                  <div class="form-group row">
                    <label for="nomor_polisi" class="col-sm-2 col-form-label">Nomor Polisi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nomor_polisi" placeholder="nomor_polisi" value="{{ $mobil->nomor_polisi}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merk" placeholder="merk" value="{{ $mobil->merk}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                      <input type="textarea" class="form-control" name="tipe" placeholder="tipe" value="{{ $mobil->tipe}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                    <div class="col-sm-10">
                      <input type="input type" class="form-control" name="kapasitas" placeholder="kapasitas" value="{{ $mobil->kapasitas}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                      <input type="warna" class="form-control" name="warna" placeholder="warna" value="{{ $mobil->warna}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="mesin" class="col-sm-2 col-form-label">Mesin</label>
                    <div class="col-sm-10">
                      <input type="warna" class="form-control" name="mesin" placeholder="mesin" value="{{ $mobil->warna}}">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection