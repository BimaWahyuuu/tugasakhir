@extends('partial.parentAdmin')
@section('css')
  <link rel="stylesheet" href="{{ asset('stisla/node_modules/chocolat/dist/css/chocolat.css') }}">
@endsection
@section('contentTitle', 'Kotak Masuk')
@section('title', $saran->judul)
@section('content')
<article class="article article-style-c">
  <div class="article-header">
    <img src="{{ asset('img/'.$saran->foto) }}" alt="" class="img-fluid">
  </div>
  <div class="article-details">
    <div class="article-category d-flex"><a href="#">Waka : {{$saran->bidang->waka->nama}}</a> 
      <div class="bullet"></div><a href="#">Kategori : {{$saran->bidang->bidang}}</a>
      <div class="bullet"></div><a class="me-auto" href="#">{{ $diff = Carbon\Carbon::parse($saran->created_at)->diffInDays(Carbon\Carbon::now()) }} Days Ago</a>
      <div class="me-auto"></div>
      <form action="{{ route('pesan.update', $saran->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" value="diterima" name="status">
        <button class="btn btn-success" type="submit">Terima</button>
      </form>
    </div>
    <div class="card-body">
      <div class="gallery">
          <div class="gallery-item" data-image="{{ asset('img/'.$saran->foto) }}" data-title="Klik Untuk Tampilan Penuh" href="../assets/img/news/img01.jpg" title="Image 1" style="background-image: url({{ asset('stisla/assets/img/news/img01.jpg') }});"></div>
      </div>
    </div>
    <div class="article-title">
      <h2><a href="#">{{$saran->judul}}</a></h2>
    </div>
    <p>{{$saran->isi}}</p>
    <div class="article-user">
      <div class="article-user-details">
        <div class="user-detail-name">
          <a href="#">{{$saran->nama}}</a>
        </div>
      </div>
    </div>
  </div>
</article>
<div class="chocolat-wrapper" id="chocolat-content-1" style="display: none;">
    <div class="chocolat-overlay" style="display: none;"></div>
    <div class="chocolat-loader" style="display: none; opacity: 1;"></div>
    <div class="chocolat-content" style="overflow: visible; width: 583px; height: 417.049px; left: 50px; top: 124.475px;"><img class="chocolat-img" src=""></div>
    <div class="chocolat-top"><span class="chocolat-close"></span></div>
    <div class="chocolat-left active"></div>
    <div class="chocolat-right active"></div>
    <div class="chocolat-bottom"><span class="chocolat-fullscreen"></span><span class="chocolat-description">Image 3</span><span class="chocolat-pagination"></span><span class="chocolat-set-title"></span></div>
</div>
@endsection
@section('js')
<script src="{{ asset('stisla/assets/js/page/features-posts.js') }}"></script>
@endsection
@section('specjs')
<script src="{{ asset('stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
@endsection