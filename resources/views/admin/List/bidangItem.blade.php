@if ($bidangs->isEmpty())
	<div class="row justify-content-center text-center">
		{{-- <h1 class="text-secondary fw-bold">data kosong, buat data dahulu</h1> --}}
		<img src="{{ asset('img/kosong.png') }}"  class="mt-5 logo-kosong"  alt="{{ asset('img/kosong.png') }}">
		<h1 class="text-black fw-bold">Data Kosong Silahkan Buat Data</h1>
		<div class="p-2 ms-auto"><a href="/admin/bidang/create" class="btn btn-success  px-5">Tambah Data</a></div>
	</div>
@else
	{{-- <div class="card-header">
		Waka {{$wakas}}
	</div> --}}
	<div class="card-header bg-secondary text-center text-primary d-flex">
		DAFTAR WAKA
		<div class="me-auto"></div>
		<div class="p-2">
		</div>
	</div>
	<div class="card-body" >
		@foreach ($bidangs as $bidang)
		 	@php
		 		$i = mt_rand(1,5);
		 		$a = mt_rand(1,3);

		 		switch ($i) {
		 			case 1:
		 				$c = "primary";
		 				break;
		 			case 2:
		 				$c = "success";
		 				break;
						case 3:
							$c = "warning";
							break;
						case 4:
							$c = "danger";
							break;
		 			default:
		 				$c = "primary";
		 				break;
		 		}

		 		// $kelas = "btn btn-".$c."mx-".$a."px-".$i."";
		 	@endphp
		 	<button class="btn btn-{{$c}} mx-{{$a}} px-{{$i}} my-{{$a}}">{{$bidang->bidang}}</button>
		 @endforeach		 
	</div>
@endif