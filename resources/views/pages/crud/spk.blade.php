@extends('pages.crud.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data SPK</li>
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
                <h3 class="card-title">Data SPK</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
                @endif
                <form action="/spk" method="post">
                    @csrf
                    <select name="alternatif" id="" class="form-control">
                        @foreach($mobil as $mob)
                        <option value="{{ $mob }}">
                        {{ $mob->merk }}
                        </option>
                        @endforeach
                    </select>
                    <button type="submit">Tambah Alternatif</button>
                    </form>
                <br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Alternatifs</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Kecepatan</th>
                    <th>Kapasitas</th>
                    <th>Waktu Penyewaan</th>
                    <th>Kapasitas Bensin</th>
                   <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($alternatif as $mobil)
                  <tr>
                    <td>{{ $mobil->alternatifs}}</td>
                    <td>{{ $mobil->merk}}</td>
                    <td>{{ $mobil->harga }}</td>
                    <td>{{ $mobil->kecepatan }}</td>
                    <td>{{ $mobil->kapasitasorang }}</td>  
                    <td>{{ $mobil->waktupenyewaan }}</td>
                    <td>{{ $mobil->kapasitasbensin }}</td>
                    <td>
                      <a href="/dashboard/armadas/{{ $mobil->id }}/edit" class="btn-xs btn-primary">Edit</a>
                      <form action="/dashboard/armadas/{{ $mobil->id }}" method="POST" class="d-inline">
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
