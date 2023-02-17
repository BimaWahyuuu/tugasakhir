@extends('partial.parentAdmin')
@section('title', 'List Kategori')
@section('css')
  
@endsection
@section('contentTitle', 'List Bidang')
@section('content')
@include('partial.alert')
<div class="row">
	<div class="col-12 col-sm-12 col-lg-5">
		<div class="card">
			<div class="card-body">
				<table class="table table-stripped-colums">
				<thead class="border border-dark-subtle border-1">
					<tr>
						<th class="fw-bold">#</th>
						<th class="fw-bold">Waka</th>
						<th class="fw-bold">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($wakas as $i => $waka)
						<tr>
							<td>{{$i}}</td>
							<td>{{$waka->nama}}</td>
							<td width="200px">
									<a href="{{ route('bidang.edit', $waka->id)}}" onclick="showAll({{$waka->id}})" 
									class="btn-warning btn icon-warning icon-left d-inline" >
										<i class="fas fa-tools"></i>
										edit
									</a>
								  	<button onclick="showAll({{$waka->id}})" 
									class="btn-primary btn icon-primary d-inline icon-left">
										<i class="fas fa-eye"></i>
										Lihat
									</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-lg-7">
		<div class="card" id="items" >
			
		</div>	
	</div>
</div>
@endsection
@section('js')
	<script src="{{ asset('js/customScript.js') }}"></script>
@endsection