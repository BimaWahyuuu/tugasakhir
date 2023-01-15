@extends('partial.parentAdmin')
@section('title', 'List Waka')
@section('css')
<link rel="stylesheet" href="{{ asset('stisla/node_modules/bootstrap-social/bootstrap-social.css') }}">
@endsection
@section('contentTitle', 'List Waka')
@section('content')
<div class="d-flex mb-3">
  <div class="p-2 ms-auto"><a href="/admin/waka/create" class="btn btn-success  px-5">Tambah Data</a></div>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="row">

	@foreach ($wakas as $waka)
		<div class="col-12 col-sm-12 col-lg-6">
			<div class="card profile-widget">
	          	<div class="profile-widget-header d-flex">
	           		<img alt="image" src="{{asset('storage')}}/{{$waka->foto}}" class="rounded-circle object-fit-contain border-success border border-3 profile-widget-picture">
	           		<div class="me-auto"></div>
	           		<div class="p-2">
	           			<a href="javascrip:void(0)" data-id="{{$waka->id}}" id="edit-id" class="btn-icon icon-left-btn-light">
	           				Edit
	           			</a>
	       			</div>
	       			<div class="p-2">
	       				<a href="#" class="ml-3 btn btn-icon icon-left btn-danger">
	           				<i class="fas fa-trash"></i>
	           			 	Delete
	           			</a>
	       			</div>
		        </div>
		          <div class="profile-widget-description pb-0">
		            <div class="profile-widget-name">{{$waka->nama}}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div>{{$waka->jabatan}}</div></div>
		            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		            consequat.</p>
		          </div>
		          <div class="card-footer text-center pt-0">
	        	</div>
			</div>
		</div>
	@endforeach
</div>
@endsection