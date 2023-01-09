@extends('partial.parentAdmin')
@section('title', 'Dashboard')
@section('css')
  <link rel="stylesheet" href="{{ asset('stisla/node_modules/bootstrap-social/bootstrap-social.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    {{-- start GA --}}
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>  
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
  </script>
  {{-- endGA --}}
 
@endsection
@section('contentTitle', 'Dashboard')
@section('content')
<h2 class="section-title">Jumlah Pesan Masuk</h2>
<p class="section-lead">Jumlah Pesan masuk dihitung dari tiap waka</p>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Waka 1</h4>
        </div>
        <div class="card-body">
          10
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Waka 2</h4>
        </div>
        <div class="card-body">
          42
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Waka 3</h4>
        </div>
        <div class="card-body">
          1,201
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Waka 4</h4>
        </div>
        <div class="card-body">
          47
        </div>
      </div>
    </div>
  </div>                  
</div>
<div class="row">
  <div class="col-12 col-sm-12  col-md-7">
    <div class="card card-danger">
      <div class="card-header">
        <h4>Admin</h4>
        <div class="card-header-action">
          <a href="/admin/admin" class="btn btn-danger btn-icon icon-right">Lihat Semua <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="users-carousel">
          <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-760px, 0px, 0px); transition: all 0.25s ease 0s; width: 2472px;">
              {{-- items --}}

              {{-- an item --}}
              <div class="owl-item cloned" style="width: 170.078px; margin-right: 20px;"><div>
                  <div class="user-item">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-3.png') }}" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">Bagus Dwi Cahya</div>
                      <div class="text-job text-muted">UI Designer</div>
                      <div class="user-cta">
                        <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- enditem --}}
              <div class="owl-item cloned" style="width: 170.078px; margin-right: 20px;"><div>
                  <div class="user-item">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-3.png') }}" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">Bagus Dwi Cahya</div>
                      <div class="text-job text-muted">UI Designer</div>
                      <div class="user-cta">
                        <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="owl-item cloned" style="width: 170.078px; margin-right: 20px;"><div>
                  <div class="user-item">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-3.png') }}" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">Andrean firmansyah</div>
                      <div class="text-job text-muted">anjay</div>
                      <div class="user-cta">
                        <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- enditems --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-5">
    <div class="card card-hero">
      <div class="card-header">
        <div class="card-icon">
          <i class="far fa-question-circle"></i>
        </div>
        <h4>14</h4>
        <div class="card-description">Saran Terbaru</div>
      </div>
      <div class="card-body p-0">
        <div class="tickets-list">
          <a href="#" class="ticket-item">
            <div class="ticket-title">
              <h4>My order hasn't arrived yet</h4>
            </div>
            <div class="ticket-info">
              <div>Laila Tazkiah</div>
              <div class="bullet"></div>
              <div class="text-primary">1 min ago</div>
            </div>
          </a>
          <a href="#" class="ticket-item">
            <div class="ticket-title">
              <h4>Please cancel my order</h4>
            </div>
            <div class="ticket-info">
              <div>Rizal Fakhri</div>
              <div class="bullet"></div>
              <div>2 hours ago</div>
            </div>
          </a>
          <a href="#" class="ticket-item">
            <div class="ticket-title">
              <h4>Do you see my mother?</h4>
            </div>
            <div class="ticket-info">
              <div>Syahdan Ubaidillah</div>
              <div class="bullet"></div>
              <div>6 hours ago</div>
            </div>
          </a>
          <a href="features-tickets.html" class="ticket-item ticket-more">
            View All <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
  <script src="{{ asset('stisla/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
@endsection
@section('specjs')
  <script src="{{ asset('stisla/assets/js/page/components-user.js') }}"></script>
@endsection