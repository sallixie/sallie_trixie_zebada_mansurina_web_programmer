@extends('layouts.base')
@section('title', 'Admin')
@section("breadcrumb")
<a href="#" class="breadcrumb-item">
  <span class="breadcrumb-text">Admin</span>
</a>
@endsection
@section("content")

<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="portlet-header d-flex justify-content-between">
        <h3 class="portlet-title">Riwayat Peminjaman</h3>
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
                    <th>Aksi</th>
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
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                          <button class="dropdown-item btn-edit" type="submit" data-id="{{ $dt->id }}">Edit</button>
                          <form action="/admin/delete/{{ $dt->id }}" method="post" class="form-delete">
                            @csrf
                            @method('delete')
                            <button class="dropdown-item btn-delete" type="submit" value="{{ $dt->id }}">Delete</button>
                          </form>
                        </div>
                      </div>
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

<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Pemesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/edit" method="POST">
        @csrf
        @method('put')
        <div class="modal-body modal-edit-body">
          {{--  --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection


@section("script")

<script>
  $(document).ready(function() {
    $('#table').DataTable({});

    $('.form-delete').submit(function(e) {
      e.preventDefault();
      var id = $(this).find('.btn-delete').val();
      Swal.fire({
        title: "Apakah anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal",
      }).then((result) => {
        if (result.isConfirmed) {
          $(this).unbind('submit').submit();
        }
      })
    });

    $("#table").on('click', 'tbody tr td .btn-edit', function () {
      let id = $(this).data("id");
      $.ajax({
        url: "/admin/get/" + id,
        type: "GET",
        success: function (data) {
          console.log(data);
          $(".modal-edit-body").html(data);
          $("#edit-modal").modal("show");
        },
      });
    });

  });
</script>


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