@extends('partial.parentAdmin')
@section('title', 'Add Kategori')
@section('css')

@endsection
@section('contentTitle', 'Add Bidang')
@section('content')
<div class="row">
	<div class="col-12 col-sm-12 col-lg-12">
		<div class="card">
          <div class="card-header">
            <h4>Tambahkan Bidang</h4>
          </div>
          <div class="card-body">
          	<form action="{{ route('bidang.store') }}" method="post">
        				@csrf
        				<div class="input-group mb-3">
								<select class="form-select input-group-text col-lg-4"  name="waka_id">
										<option selected>Pilih Waka</option>
										@foreach (	$wakas as $waka)
												<option value="{{$waka->id}}">{{$waka->jabatan}}</option>	
										@endforeach
								</select>
								<input type="text" class="form-control" placeholder="Masukan Bidang" required="required" value="{{old('bidang')}}" name="bidang" aria-label="Text input with dropdown button">
							</div>
							<button class="btn-success btn" type="submit">Simpan</button>
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
