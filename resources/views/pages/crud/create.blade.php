@extends('pages.crud.page')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah data mobil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Registrasi</li>
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
              <h3 class="card-title">Registrasi</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/dashboard/armadas" class="form-horizontal">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="rental_id" class="col-sm-2 col-form-label">Rental</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="rental_id" id="rental_id">
                      @foreach ($rentals as $rental)
                          <option value="{{ $rental->id }}">{{ $rental->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nomor_polisi" class="col-sm-2 col-form-label">Nomor Polisi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_polisi" placeholder="nomor_polisi">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="merk" placeholder="merk">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tipe" placeholder="tipe">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kapasitas" placeholder="kapasitas">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="warna" placeholder="warna">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="mesin" class="col-sm-2 col-form-label">Mesin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mesin" placeholder="mesin">
                  </div>
                </div>

                            
                <div class="form-group row">
                  <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" placeholder="harga">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="kecepatan" class="col-sm-2 col-form-label">Kecepatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kecepatan" placeholder="kecepatan">
                  </div>
                </div>
              
                <div class="form-group row">
                  <label for="kapasitasorang" class="col-sm-2 col-form-label">Kapasitas Orang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kapasitasorang" placeholder="kapasitasorang">
                  </div>
                </div>

                <div class="form-group row">
                   <label for="waktupenyewaan" class="col-sm-2 col-form-label">Waktu Penyewaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="waktupenyewaan" placeholder="waktupenyewaan">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="kapasitasbensin" class="col-sm-2 col-form-label">Kapasitas Bensin</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="kapasitasbensin" placeholder="kapasitasbensin">
                          </div>
                        </div>
                
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Create</button>
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