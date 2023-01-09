{{-- head start --}}
@include('partial.head')
{{-- head end --}}

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      {{-- nav start --}}
      @include('partial.nav')
      {{-- nav end --}}

      {{-- sidebar start --}}
      @include('partial.sidebar')
      {{-- sidebar end --}}
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      
      {{-- footer start --}}
      @include('partial.footer')
      {{-- footer end --}}

    </div>
  </div>

  @include('asset.js')
