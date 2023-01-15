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
	           			<button type="button"  class="btn btn-icon icon-left btn-edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="{{$waka->nama}}" data-id="{{$waka->id}}">
	           				<i class="fas fa-pencil-ruler"></i>
	           				Edit
	           			</button>
	       			</div>
	       			<div class="p-2">
	       				<a href="{{ route('waka.hapus', $waka->id) }}" class="ml-3 btn btn-icon icon-left btn-danger">
	           				<i class="fas fa-trash"></i>
	           			 	Hapus
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
@section('specjs')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Waka</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="edit-form" action="" method="post">
        	@csrf
        	{{method_field('PUT')}}
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama Waka</label>
            <input name="nama" type="text" class="form-control" id="nama" value="">
          </div><div class="mb-3">
            <label for="recipient-name" class="col-form-label">Jabatan</label>
            <input name="jabatan" type="text" class="form-control" id="jabatan" value="">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Deskripsi</label>
            <textarea class="form-control" ></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
      </div>
        </form>
    </div>
  </div>
</div>
	<script src="{{ asset('js/customScript.js') }}"></script>

@endsection