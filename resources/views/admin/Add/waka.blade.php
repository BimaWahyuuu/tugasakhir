@extends('partial.parentAdmin')
@section('title', 'Add Waka')
@section('css')
  
@endsection
@section('contentTitle', 'Add Waka')
@section('content')
@if (count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="card">
    <div class="card-header">
      <h4>Form Tambah Waka</h4>
    </div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="post" action="{{ route('waka.store') }}">
        @csrf
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-10">
            <input type="text" name="jabatan" name class="form-control" id="inputPassword3">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Pria" checked>
              <label class="form-check-label" for="gridRadios1">
                Pria
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Wanita">
              <label class="form-check-label" for="gridRadios2">
                Wanita
              </label>
            </div>
            <div class="col-md-4">
              <label for="formFile" class="form-label">Masukan foto</label>
              <input name="foto" class="form-control form-control" id="formFil" type="file">
            </div>
          </div>
        </fieldset>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
      </form>
  </div>
@endsection