@extends('layouts.base')
@section('title', 'Dashboard')
@section("content")

@auth
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN Portlet -->
    <div class="portlet">
      <!-- BEGIN Widget -->
      <div class="widget10 widget10-vertical-md">
        <div class="widget10-item">
          <div class="widget10-content">
            {{-- <h2 class="widget10-title">{{ $data["kendaraan"] }}</h2> --}}
            <span class="widget10-subtitle">Kendaraan Tersedia</span>
          </div>
          <div class="widget10-addon">
            <!-- BEGIN Avatar -->
            <div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-car"></i>
              </div>
            </div>
            <!-- END Avatar -->
          </div>
        </div>
        <div class="widget10-item">
          <div class="widget10-content">
            {{-- <h2 class="widget10-title">{{ $data["driver"] }}</h2> --}}
            <span class="widget10-subtitle">Driver Tersedia</span>
          </div>
          <div class="widget10-addon">
            <!-- BEGIN Avatar -->
            <div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-user"></i>
              </div>
            </div>
            <!-- END Avatar -->
          </div>
        </div>
        <div class="widget10-item">
          <div class="widget10-content">
            <h2 class="widget10-title">
              {{-- @if($data["status_peminjaman"] == null)
              Tidak Ada
              @elseif($data["status_peminjaman"] == "menunggu")
              Dalam Antrian
              @elseif($data["status_peminjaman"] == "dipakai")
              Dalam Peminjaman
              @endif --}}
            </h2>
            <span class="widget10-subtitle">Status Peminjaman</span>
          </div>
          <div class="widget10-addon">
            <!-- BEGIN Avatar -->
            <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-info"></i>
              </div>
            </div>
            <!-- END Avatar -->
          </div>
        </div>
        <div class="widget10-item">
          <div class="widget10-content">
            <h2 class="widget10-title">
              {{-- BELAKANGAN AJA --}}
              {{-- {{ $data["status_reimburse"] ? $data["status_reimburse"]->status : "KOSONG" }} --}}
            </h2>
            <span class="widget10-subtitle">Status Reimburse</span>
          </div>
          <div class="widget10-addon">
            <!-- BEGIN Avatar -->
            <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa-solid fa-gas-pump"></i>
              </div>
            </div>
            <!-- END Avatar -->
          </div>
        </div>
      </div>
      <!-- END Widget -->
    </div>
    <!-- END Portlet -->
  </div>
</div>
@endauth

@if(Auth::user()->role == 'user')
{{-- <div class="row">
  <div class="col-md-12">
    <div class="portlet widget1">
      <div class="widget1-display bg-info text-white" style="min-height: unset">
        <div class="widget1-dialog" style="display: inline-block">
          <div class="widget1-dialog-content widget1-dialog-content py-5">
            <div class="row align-items-center">
              <div class="col-md-4 ">
                <h5 class="mb-0">Anda sedang memakai kendaraan <br><span class="h1">{{ $peminjaman->kendaraan->no_polisi }}</span></h5>
                <h6 class="mb-0">( @isset($peminjaman->driver->nama) {{ $peminjaman->driver->nama }} @else Tanpa Driver @endisset )</h6>
              </div>
              <div class="col-md-4 my-4">
                <h5 class="mb-0">Estimasi Waktu Selesai <br><span class="h1">
                  {{ Carbon\Carbon::parse($peminjaman->waktu_selesai)->translatedFormat('l, d M Y') }}
                </span> <br>
                  <span class="h5">
                    @php
                      $date = new DateTime($peminjaman->waktu_selesai);
                      echo $date->format('H:i');
                    @endphp
                  </span>
                </h5>
              </div>
              <div class="col-md-4">
                <h5 class="mb-3">Harap melakukan konfirmasi apabila telah selesai melakukan peminjaman</h5>
                <form action="/peminjaman/selesai/{{ $peminjaman->id }}" method="POST" id="form-selesai">
                  @csrf
                  <button type="button" class="btn btn-success w-50" id="btn-selesai">Selesai</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
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


{{-- <script>
  $(document).ready(function () {
    $("#btn-batal").click(function () {
      Swal.fire({
        title: "Apakah anda yakin ingin membatalkan peminjaman?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
      }).then((result) => {
        if (result.isConfirmed) {
          $("#form-batal").submit();
        }
      });
    });

    $("#btn-selesai").click(function () {
      Swal.fire({
        title: "Apakah anda yakin telah selesai melakukan peminjaman?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
      }).then((result) => {
        if (result.isConfirmed) {
          $("#form-selesai").submit();
        }
      });
    });

    $(".btn-admin-hapus").click(function () {
      Swal.fire({
        title: "Apakah anda yakin ingin menghapus data ini?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
      }).then((result) => {
        if (result.isConfirmed) {
          $(this).parent().submit();
        }
      });
    });
    
  });
</script> --}}
@endsection