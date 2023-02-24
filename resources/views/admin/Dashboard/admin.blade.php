@extends('partial.parentAdmin')
@section('title', 'Admin list')
@section('css')
  
@endsection
@section('contentTitle', 'Admin list')
@section('content')
<div class="d-flex mb-3">
  <div class="p-2 ms-auto"><button class="btn btn-success px-5" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="add user">Tambah Data</button></div>
</div>
@include('partial.alert')
@php
  // dd(route('users.update',1));
@endphp
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Admin List</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md" id="user-table">
            <tbody>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            @foreach ($users as $user)
              
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{date('d F Y', strtotime($user->created_at))}}</td>
              <td>
                @if ($user->role == "admin")
                  <div class="badge badge-success">Admin</div>
                @elseif ($user->role == "waka")
                  <div class="badge badge-primary">Waka</div>
                @elseif($user->role == "super admin")
                  <div class="badge badge-danger">Super Admin</div>
                @endif
              </td>
              <td >
                <button class="btn btn-secondary btn-user" id="userDetail" data-bs-toggle="modal" data-bs-target="#showModal" data-id="{{$user->id}}">Detail</button>
                @if (Auth::user()->jabatan == "super admin")
                  <button class="btn btn-warning" id="userEdit" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{$user->id}}">Edit</button>
                  <form class="d-inline" action="{{ route('pengguna.destroy',$user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger btn">Delete</button>
                  </form>
                @endif
              </td>
            <tr/>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
@section('specjs')
{{-- editModal --}}
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body row">
          <div class="col-md-4">
            <img id="edit-prev-user-image" src="" alt="" class="img-thumbnail" style="width: 200px !important;">
            <form action="" method="post" enctype="multipart/form-data" id="edit-user-form">
              @csrf
              @method('PUT')
            <div class="mt-4" >
            <label for="edit-foto"></label>
            <input id="edit-user-foto" type="file" class="form-control" name="foto">
            </div>
          </div>
          <div class="col-md-8 row">
            <div class="col-6">
              <label for="edit-user-name">Nama</label>
              <input type="text" class="form-control my-1" id="edit-user-name" name="name" value="">
            </div>
            <div class="col-6">
              <label for="edit-user-status">Status</label>
              <select name="role" class="form-select input-group-text" id="edit-user-status">
                <option id="edit-user-status" selected>Pilih Status Baru</option>
                <option value="admin">Admin</option>
                <option value="waka" id="waka">Waka</option>
                <option value="super admin">Super Admin</option>
              </select>
            </div>
            <div class="col-6">
              <label for="edit-user-email">Email</label>
              <input type="email" class="form-control my-1" id="edit-user-email" name="email" value="">
            </div>
            <div class="col-6" id="edit-user-password">
              <label for="edit-user-password">Password</label>
              <input type="password"  class="form-control my-1"  name="password" value="">
            </div>
            <div class="col-6 d-none" id="edit-waka">
              <label for="editWaka" class="col-form-label d-none">Pilih Waka</label>
              <select name="jabatan" class="form-select input-group-text" id="editWaka">
                <option value="">Pilih Waka</option>
                @foreach ($wakas as $waka)
                  <option value="{{$waka->jabatan}}">{{$waka->jabatan}}</option>
                @endforeach
              </select>
            </div>
          </div>  
        </div>
        <div class="modal-footer modal-show-user">
          <button type="button" class="btn btn-secondary"  id="reset" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submitUserEdit">Ubah</button>
            </form>
        </div>
    </div>
  </div>
</div>
{{-- modal Create User --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="edit-form" action="{{ route('pengguna.store') }}" method="post" class="row" enctype="multipart/form-data">
          @csrf
          <div class="mb-3 col-6">
            <label for="recipient-name" class="col-form-label">Nama User</label>
            <input autocomplete="off" name="name" type="text" class="form-control" id="nama" value="">
          </div>
          <div class="mb-3 col-6">
            <label for="sel-Stat" class="col-form-label">Pilih status</label>
            <select name="role" id="sel-Stat" class="form-select input-group-text">
              <option value="admin">Admin</option>
              <option value="waka">Waka</option>
              <option value="super admin">Super Admin</option>
            </select>
          </div>
          <div class="mb-3 col-6">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input autocomplete="off" name="email" type="email" class="form-control"  value="">
          </div>
          <div class="mb-3 col-6">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input autocomplete="off" name="password" type="password" class="form-control" value="">
          </div>
          <div class="col-6 d-none" id="wakaList">
            <label for="wakaL" class="col-form-label">Pilih Waka</label>
            <select name="jabatan" class="form-select input-group-text" id="wakaL">
              <option value="">Pilih Waka</option>
              @foreach ($wakas as $waka)
                <option value="{{$waka->jabatan}}">{{$waka->jabatan}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-5">
            <label for="useroto"  class="col-form-label">foto</label>
            <input type="file" id="userFoto" name="foto" class="form-control">
          </div>
          <div class="col6"></div>
          <div class="col-7">
            <img id="userPrev" src=""  style="width: 150px !important;" class="img-thumbnail rounded-circle">
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
{{-- end --}}

{{-- modal show --}}
<div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="user-edit-form" action="" method="post" enctype="multipart/form-data">
        <div class="modal-body row">
          <div class="col-md-4">
            <img id="user-image" src="" alt="" class="img-thumbnail" style="width: 200px !important;">
          </div>
          <div class="col-md-8 row">
            <div class="col-6">
              <label for="user-name">Nama</label>
              <input type="text" readonly class="form-control my-1" id="user-name" name="name" value="">
            </div>
            <div class="col-6">
              <label for="user-status">Status</label>
              <input type="text" readonly class="form-control my-1" id="user-status" value="">
            </div>
            <div class="col-6">
              <label for="user-email">Email</label>
              <input type="email" readonly class="form-control my-1" id="user-email" name="email" value="">
            </div>
          </div>  
        </div>
        <div class="modal-footer modal-show-user">
          <button type="button" class="btn btn-secondary"  id="reset" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary d-none" id="submitUserEdit">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- end --}}
<script src="{{ asset('js/customScript.js') }}"></script>


@endsection