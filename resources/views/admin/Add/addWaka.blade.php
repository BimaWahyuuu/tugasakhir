@extends('partial.parentAdmin')
@section('title', 'Add Waka')
@section('css')
  
@endsection
@section('contentTitle', 'Add Waka')
@section('content')
	<div class="card">
      <form>
        <div class="card-header">
          <h4>Form Tambah Waka</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Nama Waka</label>
            <input type="text" class="form-control {{-- is-valid --}}" value="nama" required="">
            {{-- <div class="valid-feedback">
              Good job!
            </div> --}}
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="email" class="form-control">
          </div>
           <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{-- is-invali --}}d" required="" value="nama@smkn1-sby.sch.id">
            {{-- <div class="invalid-feedback">
              Oh no! Email is invalid.
            </div> --}}
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="email" class="form-control {{-- is-invali --}}d" required="" value="">
            {{-- <div class="invalid-feedback">
              Oh no! Email is invalid.
            </div> --}}
          </div>
          <div class="form-group mb-0">
            <label>deskripsi</label>
            <textarea class="form-control {{-- is-invalid --}}" required=""></textarea>
            {{-- <div class="invalid-feedback">
              Oh no! You entered an inappropriate word.
            </div> --}}
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
@endsection