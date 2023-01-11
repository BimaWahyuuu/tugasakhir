@extends('partial.parentAdmin')
@section('title', 'Add Kategori')
@section('css')
<link rel="stylesheet" href="{{ asset('stisla/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
@endsection
@section('contentTitle', 'Add Kategori')
@section('content')
<div class="row">
	<div class="col-12 col-sm-12 col-lg-12">
		<div class="card">
          <div class="card-header">
            <h4>Tambahkan Kategori</h4>
          </div>
          <div class="card-body">
          	<form action="" method="post">
        		@csrf
        		{{-- <input type="hidden" value="{{$data->id}}" name="siswa_id"> --}}
        		<div class="input-group mb-3">
				<select class="form-select input-group-text col-lg-4" name="jenis_id">
					<option selected>Pilih Waka</option>
					{{-- @foreach ($jenis as $item) --}}
						{{-- <option value="{{$item->id}}">{{$item->jenis_kontak}}</option> --}}
					{{-- @endforeach --}}
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
				<input type="text" class="form-control" placeholder="Kategori" value="{{old('deskripsi')}}" name="deskripsi" aria-label="Text input with dropdown button">
			</div>
		       <div class="form-group">
		          <label class="form-label">Color Input</label>
		          <div class="row gutters-xs">
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="primary" class="colorinput-input">
		                <span class="colorinput-color bg-primary"></span>
		              </label>
		            </div>
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="secondary" class="colorinput-input">
		                <span class="colorinput-color bg-secondary"></span>
		              </label>
		            </div>
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="danger" class="colorinput-input">
		                <span class="colorinput-color bg-danger"></span>
		              </label>
		            </div>
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="warning" class="colorinput-input">
		                <span class="colorinput-color bg-warning"></span>
		              </label>
		            </div>
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="info" class="colorinput-input">
		                <span class="colorinput-color bg-info"></span>
		              </label>
		            </div>
		            <div class="col-auto">
		              <label class="colorinput">
		                <input name="color" type="checkbox" value="success" class="colorinput-input">
		                <span class="colorinput-color bg-success"></span>
		              </label>
		            </div>
		          </div>
		        </div>
            </form>
          </div>
        </div>
	</div>
</div>  
@endsection
@section('js')
<script src="{{ asset('stisla/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
@endsection
@section('specjs')
<script src="{{ asset('stisla/assets/js/page/forms-advanced-forms.js') }}"></script>
@endsection
