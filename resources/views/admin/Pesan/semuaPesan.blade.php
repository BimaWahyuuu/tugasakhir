@extends('partial.parentAdmin')
@section('title', 'Kotak Masuk')
@section('css')
<link rel="stylesheet" href="{{ asset('stisla/node_modules/selectric/public/selectric.css') }}">
@endsection
@section('contentTitle', 'Kotak Masuk')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card mb-0">
        <div class="card-body">
          <ul class="nav nav-pills" id="menus">
            <li class="nav-item">
              <a class="menu-itm nav-link active" data-id="all" href="#">Semua <span class="badge badge-white">{{$allPost->count()}}</span></a>
            </li>
            <li class="nav-item">
              <a class="menu-itm nav-link" data-id="new" href="#">Belum Dibaca<span class="badge badge-primary">{{$new->count()}}</span></a>
            </li>
            <li class="nav-item">
              <a class="menu-itm nav-link " data-id="acc" href="#">Diterima <span class="badge badge-primary">{{$accs->count()}}</span></a>
            </li>
            <li class="nav-item">
              <a class="menu-itm nav-link" data-id="reject" href="#">Sampah <span class="badge badge-primary">{{$rejects->count()}}</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-12">
      {{-- all --}}
      <div class="card mainContent" id="all">
        <div class="card-header">
          <h4>All Posts</h4>
        </div>
        <div class="card-body">
          <div class="float-left">
            
          </div>
          <div class="float-right">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix mb-3"></div>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>jurusan</th>
                  <th>Waka/Bidang</th>
                  <th>Penulis</th>
                  <th>Created At</th>
                  <th>Status</th>
                </tr>
                @foreach ($allPost as $saran)
                <tr>
                  <td>{{$saran->jurusan}}<div class="table-links mr-3">
                    <a href="{{ route('pesan.show', $saran->id) }}">Baca</a>
                    <div class="bullet"></div>
                      <form class="d-inline" action="{{ route('pesan.tolak', $saran->id) }}" method="post">
                        @csrf
                        <button class="text-danger" style="background-color: transparent; border: none;" type="submit">
                          tolak
                        </button>
                      </form>
                  </td>
                  <td>
                    <a href="#">{{$saran->bidang->waka->nama}}</a>/<a href="">{{$saran->bidang->bidang}}</a>
                  </td>
                  <td>
                    <p>
                      <div class="d-inline-block ml-1">{{$saran->nama}}</div>
                    </p>
                  </td>
                  <td>{{$saran->created_at}}</td>
                  <td>
                    @if ( $saran->status == 'baru')
                      <div class="badge badge-primary">baru</div>
                    @elseif ($saran->status == 'dibaca')
                      <div class="badge badge-warning">dibaca</div>
                    @elseif ($saran->status == 'ditolak')
                      <div class="badge badge-danger">ditolak</div>
                    @elseif ($saran->status == 'diterima')
                      <div class="badge badge-success
                      ">diterima</div>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      {{-- end --}}
      {{-- baru --}}
      <div class="card mainContent d-none" id="new">
        <div class="card-header">
          <h4>Belum Dibaca</h4>
        </div>
        <div class="card-body">
          <div class="float-left">

          </div>
          <div class="float-right">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix mb-3"></div>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>Jurusan</th>
                  <th>Waka/Bidang</th>
                  <th>Penulis</th>
                  <th>Created At</th>
                  <th>Status</th>
                </tr>
                @foreach ($new as $item)
                <tr>
                  <td>{{$item->jurusan}}<div class="table-links mr-3">
                    <a href="{{ route('pesan.show', $item->id) }}">Baca</a>
                    <div class="bullet"></div>
                      <form class="d-inline" action="{{ route('pesan.tolak', $item->id) }}" method="post">
                        @csrf
                        <button class="text-danger" style="background-color: transparent; border: none;" type="submit">
                          tolak
                        </button>
                      </form>
                  </td>
                  <td>
                    <a href="#">{{$item->bidang->waka->nama}}</a>/<a href="">{{$item->bidang->bidang}}</a>
                  </td>
                  <td>
                    <p>
                      <div class="d-inline-block ml-1">{{$item->nama}}</div>
                    </p>
                  </td>
                  <td>{{$item->created_at}}</td>
                  <td>
                    @if ( $item->status == 'baru')
                      <div class="badge badge-primary">baru</div>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      {{-- end --}}
      {{-- diterima --}}
      <div class="card mainContent d-none" id="acc">
        <div class="card-header">
          <h4>Diterima</h4>
        </div>
        <div class="card-body">
          <div class="float-left">
            
          </div>
          <div class="float-right">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix mb-3"></div>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>jurusan</th>
                  <th>Waka/Bidang</th>
                  <th>Penulis</th>
                  <th>Created At</th>
                  <th>Status</th>
                </tr>
                @foreach ($accs as $acc)
                <tr>
                  <td>{{$acc->jurusan}}<div class="table-links mr-3">
                    <a href="{{ route('pesan.show', $acc->id) }}">Baca</a>
                    <div class="bullet"></div>
                      <form class="d-inline" action="{{ route('pesan.tolak', $acc->id) }}" method="post">
                        @csrf
                        <button class="text-danger" style="background-color: transparent; border: none;" type="submit">
                          tolak
                        </button>
                      </form>
                  </td>
                  <td>
                    <a href="#">{{$acc->bidang->waka->nama}}</a>/<a href="">{{$acc->bidang->bidang}}</a>
                  </td>
                  <td>
                    <p>
                      <div class="d-inline-block ml-1">{{$acc->nama}}</div>
                    </p>
                  </td>
                  <td>{{$acc->created_at}}</td>
                  <td>
                    @if ($acc->status == 'diterima')
                      <div class="badge badge-success
                      ">diterima</div>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      {{-- end --}}
      {{-- rejected --}}
      <div class="card mainContent d-none" id="reject">
        <div class="card-header">
          <h4>Sampah</h4>
        </div>
        <div class="card-body">
          <div class="float-left">
            <select class="form-select" name="action" id="">
              <option selected>Action for selected</option>
              <option value="">Hapus</option>
              <option>Kembalikan ke Baru</option>
            </select>
          </div>
          <div class="float-right">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="clearfix mb-3"></div>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>jurusan</th>
                  <th>Waka/Bidang</th>
                  <th>Penulis</th>
                  <th>Created At</th>
                  <th>Status</th>
                </tr>
                @foreach ($rejects as $reject)
                <tr>
                  <td>{{$reject->jurusan}}<div class="table-links mr-3">
                    <a href="{{ route('pesan.show', $reject->id) }}">Baca</a>
                    <div class="bullet"></div>
                      <form class="d-inline" action="{{ route('pesan.tolak', $reject->id) }}" method="post">
                        @csrf
                        <button class="text-danger" style="background-color: transparent; border: none;" type="submit">
                          tolak
                        </button>
                      </form>
                  </td>
                  <td>
                    <a href="#">{{$reject->bidang->waka->nama}}</a>/<a href="">{{$reject->bidang->bidang}}</a>
                  </td>
                  <td>
                    <p>
                      <div class="d-inline-block ml-1">{{$reject->nama}}</div>
                    </p>
                  </td>
                  <td>{{$reject->created_at}}</td>
                  <td>
                    @if ($reject->status == 'ditolak')
                      <div class="badge badge-danger">ditolak</div>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="float-right">
            <nav>
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      {{-- end --}}

    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('stisla/assets/js/page/features-posts.js') }}"></script>
@endsection
@section('specjs')
<script src="{{ asset('stisla/node_modules/selectric/public/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('js/customScript.js') }}"></script>
@endsection