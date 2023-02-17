@extends('partial.parentAdmin')
@section('css')
<link rel="stylesheet" href="{{ asset('stisla/node_modules/selectric/public/selectric.css') }}">
@endsection
@section('contentTitle', 'History')
@section('content')

	<div class="row">
		<div class="section-title">Responsive</div>
		<div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
	</div>

@endsection
@section('js')
<script src="{{ asset('stisla/assets/js/page/features-posts.js') }}"></script>
@endsection
@section('specjs')
<script src="{{ asset('stisla/node_modules/selectric/public/jquery.selectric.min.js') }}"></script>
@endsection