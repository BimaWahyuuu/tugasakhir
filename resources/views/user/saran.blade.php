{{-- about --}}    
{{-- form saran --}}
@extends('user.index')
@section('content')
<section class="page-section" id="saran">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">K O A R</h2>
        <hr class="divider" />
        
        <form action="{{ route('home.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nisornip" class="form-label">NIS / NIP</label>
            <input type="number" class="form-control" id="nomorinduk" name="nisornip" placeholder="NIS untuk siswa | NIP untuk guru">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="namajurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="namajurusan" name="jurusan" placeholder="Nama Jurusan">
        </div>
        <div class="mb-3">
            <label for="waka" class="form-label">Waka</label>
            <select name="waka_id" id="" class="form-select">
                {{-- <option value="selected"></option> --}}
                @foreach ($wakas as $waka)
                    <option value="{{ $waka->id }}">{{ $waka->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="bidang" class="form-label">Bidang</label>
            <select name="bidang_id" id="" class="form-select">
                @foreach ($bidangs as $bidang)
                    <option value="{{ $bidang->id }}">{{ $bidang->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Kartu Pengenal</label>
            <input class="form-control" type="file" name="foto" id="foto">
        </div>
            <input type="submit" class="btn btn-primary" value="simpan">
            {{-- <a href="" class="btn btn-primary">Submit</a> --}}
            </form>
    </div>
</section>
@endsection