@extends('layouts.base')
@section('title', 'Check In')
@section("breadcrumb")
<a href="#" class="breadcrumb-item">
  <span class="breadcrumb-text">Check In</span>
</a>
@endsection
@section("content")

<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="portlet-header d-flex justify-content-between">
        <h3 class="portlet-title">Check In Tiket</h3>
      </div>
      <div class="portlet-body">
        <div class="row">
          <div class="col-md-12">
            <form action="/check-in" method="GET">
              <div class="input-group mb-3">
                <input type="text" name="id_tiket" class="form-control" placeholder="Masukkan ID Tiket" aria-label="Masukkan ID Tiket" aria-describedby="button-addon2" value="{{ $request->id_tiket }}">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cek</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if(isset($pemesanan))
@if(isset($pemesanan->id_tiket))
<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="portlet-header d-flex justify-content-between">
        <h3 class="portlet-title">Detail Tiket #{{ $request->id_tiket }}</h3>
      </div>
      <div class="portlet-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="table">
                <thead>
                  <tr>
                    <th>Id Tiket</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $pemesanan->id_tiket }}</td>
                    <td>{{ $pemesanan->created_at->format('d-m-Y') }}</td>
                    <td>{{ $pemesanan->biodata->nama }}</td>
                    <td>{{ $pemesanan->biodata->no_hp }}</td>
                    <td>{{ $pemesanan->biodata->alamat }}</td>
                    <td>
                      @if ($pemesanan->status == true)
                      <span class="badge badge-success">Sudah Check In</span>
                      @else
                      <span class="badge badge-danger">Belum Check In</span>
                      @endif
                    </td>
                    <td>
                      @if ($pemesanan->status == false)
                      <form action="/check-in" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm" name="id_tiket" value="{{ $pemesanan->id_tiket }}">Check In</button>
                      </form>
                      @else
                        <span class="text-secondary">Sudah Check in</span>
                      @endif
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@else

<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="portlet-header d-flex justify-content-between">
        <h3 class="portlet-title">Detail Tiket #{{ $request->id_tiket }}</h3>
      </div>
      <div class="portlet-body">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              <strong>Maaf!</strong> ID Tiket tidak ditemukan.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endif
@endif

@endsection


@section("script")

@if(session('success'))
<script>
  Swal.fire({
    title: "{{ session('success') }}",
    icon: "success",
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ok",
  })
</script>
@endif

@if(session('error'))
<script>
  Swal.fire({
    title: "{{ session('error') }}",
    icon: "error",
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ok",
  })
</script>
@endif

@if ($errors->any())
<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: "Isi data dengan benar!",
  })
</script>
@endif


@endsection