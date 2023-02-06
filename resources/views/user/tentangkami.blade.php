@extends('user.index')
@section('content')
<section class="page-section" id="tentangkami">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">K O A R</h2>
        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                <div class="container text-center">
                    <div class="row align-items-center">
                      <div class="col-md-5">
                        <a>KOAR adalah sebuah website manajemen kotak saran yang dibuat untuk memudahkan
                            seseorang dalam menyampaikan keluhan maupun saran.</a>
                        {{-- <br> --}}
                        <a>Tujuan dibuatnya website ini adalah untuk menjadikan SMKN 1 Surabaya
                            menjadi lebih baik kedepannya dalam hal memanajemen kotak saran.</a>
                      </div>
                      <div class="col-md-7">
                        <img src="{{ asset('img/203.svg')}}" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</section>
@endsection
