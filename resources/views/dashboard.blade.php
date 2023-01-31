@extends('layouts.base')
@section('title', 'Dashboard')
@section("content")

<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="widget10 widget10-vertical-md">
        <div class="widget10-item">
          <div class="widget10-content">
            <h2 class="widget10-title">{{ $data["total"] }}</h2>
            <span class="widget10-subtitle">Total Pendaftar</span>
          </div>
          <div class="widget10-addon">
            <div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="widget10-item">
          <div class="widget10-content">
            <h2 class="widget10-title">{{ $data["belum"] }}</h2>
            <span class="widget10-subtitle">Belum Check In</span>
          </div>
          <div class="widget10-addon">
            <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-times"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="widget10-item">
          <div class="widget10-content">
            <h2 class="widget10-title">{{ $data["sudah"] }}</h2>
            <span class="widget10-subtitle">Sudah Check In</span>
          </div>
          <div class="widget10-addon">
            <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
              <div class="avatar-display">
                <i class="fa fa-check"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="portlet">
      <div class="portlet-header">
        <h3>
          Selamat Datang
        </h3>
      </div>
      <div class="portlet-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Selamat Datang di Sistem Informasi Manajemen Tiket konser AgenX. Anda dapat melakukan manajemen data tiket konser dengan mudah dan cepat.</p>
              <ul>
                <li>
                  <a href="/admin">Menu Admin</a>
                </li>
                <li>
                  <a href="/check-in">Menu Check In</a>
                </li>
                <li>
                  <a href="/laporan">Menu Laporan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection