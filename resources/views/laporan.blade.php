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
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Tiket</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pemesanan as $dt)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dt->id_tiket }}</td>
                    <td>{{ $dt->created_at->format('d-m-Y') }}</td>
                    <td>{{ $dt->biodata->nama }}</td>
                    <td>{{ $dt->biodata->no_hp }}</td>
                    <td>{{ $dt->biodata->alamat }}</td>
                    <td>
                      @if ($dt->status == true)
                      <span class="badge badge-success">Sudah Check In</span>
                      @else
                      <span class="badge badge-danger">Belum Check In</span>
                      @endif
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
  </div>
</div>

@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#table').DataTable();
  });
</script>
@endsection