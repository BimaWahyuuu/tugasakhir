@extends('partial.parentAdmin')
@section('title', 'List Kategori')
@section('css')

@endsection
@section('contentTitle', 'List Bidang')
@section('content')
@include('partial.alert')
<div class="row">
    <div class="card">
        <div class="card-header text-primary">
          <p class="me-auto text-primary fw-bold">Edit Waka {{$waka->nama}}</p>
        </div>
        <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th class="fw-bold" scope="col">#</th>
                  <th class="fw-bold" scope="col">Bidang</th>
                  <th class="fw-bold" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bidangs as $bidang)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <form action="{{ route('bidang.update', $bidang->id) }}" method="post">
                    @csrf
                    @method('PUT')
                      <td id="wahyudi">
                        {{-- <input type="hidden" value=""> --}}
                        <input type="text" name="bidang" class="form-control d-none" placeholder="{{$bidang->bidang}}">
                        <p class="text-primary mt-1">{{$bidang->bidang}}</p>
                      </td>
                      <td>
                        <button  type="submit" class="btn btn-info btn-icon d-none">
                            <i class="fas fa-check"></i>
                            save
                        </button>
                        <a id="btnEdit" class="btn btn-warning btn-icon">
                            <i class="fas fa-tools"></i>
                            Edit
                        </a>
                  </form>
                  <form action="{{ route('bidang.destroy',$bidang->id) }}" class="d-inline" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-icon btn-danger" type="submit">
                        <i class="fas fa-trash"></i>
                        Hapus
                    </button>
                  </form>
                      </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('js/customScript.js') }}"></script>
@endsection