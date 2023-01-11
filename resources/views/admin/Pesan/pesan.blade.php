@extends('partial.parentAdmin')
@section('title', 'Kotak Masuk')
@section('css')
<link rel="stylesheet" href="{{ asset('stisla/node_modules/selectric/public/selectric.css') }}">
@endsection
@section('contentTitle', 'Kotak Masuk')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card mb-0">
        <div class="card-body">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Baru <span class="badge badge-white">5</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Diterima <span class="badge badge-primary">1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sampah <span class="badge badge-primary">0</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-12" id="pesan">
     
    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('stisla/assets/js/page/features-posts.js') }}"></script>
@endsection
@section('specjs')
<script src="{{ asset('stisla/node_modules/selectric/public/jquery.selectric.min.js') }}"></script>
@endsection