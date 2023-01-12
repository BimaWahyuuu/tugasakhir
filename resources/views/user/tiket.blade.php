@extends('user.index')
@section('content')
<section class="page-section" id="tiket">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">K O A R</h2>
        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h4>Masukkan Kode : </h4>
            <h4>005050</h4>

            <a href="/ceksaran" class="btn btn-primary">Lanjutkan</a>
        </div>
    </div>
</section>
@endsection
