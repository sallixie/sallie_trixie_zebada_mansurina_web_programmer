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
            <form action="/check-in" method="POST">
              @csrf
              <div class="input-group mb-3">
                <input type="text" name="id_tiket" class="form-control" placeholder="Masukkan ID Tiket" aria-label="Masukkan ID Tiket" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Check In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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