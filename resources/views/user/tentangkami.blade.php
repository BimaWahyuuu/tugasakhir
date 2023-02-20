@extends('user.index')
@section('content')
<section class="page-section" id="tentangkami">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">K O A R</h2>
        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                <div class="container text-center">
                    <div class="row align-items-center">
                      <div class="col-md-5">
                        <a>KOAR adalah sebuah website manajemen kotak saran yang dibuat untuk memudahkan
                            seseorang dalam menyampaikan keluhan maupun saran.</a>
                        <br>
                        <a>Tujuan dibuatnya website ini adalah untuk menjadikan SMKN 1 Surabaya
                            menjadi lebih baik kedepannya dalam hal memanajemen kotak saran.</a>
                      </div>
                      <div class="col-md-7">
                        <img src="{{ asset('img/203.svg')}}" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Ainun Najib Romadhoni, S.ST.</h5><span class="small text-uppercase text-muted">Waka Kurikulum</span>
                                <br>
                                <p><small>Waka Kurikulum mempunyai tugas membantu Kepala Sekolah dalam hal berikut : 
                                    Mengumpulkan dan menyimpan dokumen Kurikulum Nasional dan Kurikulum Ciri Khusus. 
                                    Menyusun perencanaan program pembelajaran semesteran dan atau tahunan, yang mencakupi kegiatan awal tahun pelajaran.</small></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Lilik Kurniati, S.Pd.</h5><span class="small text-uppercase text-muted">Waka Sarpras</span>
                                <br>
                                <p><small>Waka Sarana dan Prasarana merupakan pejabat yang ditunjuk oleh Kepala Sekolah dan bertanggung jawab kepada Kepala Sekolah 
                                    dalam memimpin, merencanakan, mengembangkan, mengarahkan, mengkoordinasikan, mengawasi, dan mengendalikan kegiatan sekolah 
                                    dalam melaksanakan program bidang sarana prasarana sesuai dengan visi, misi, dan program kerja yang telah ditetapkan.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Labib, S.Pd.</h5><span class="small text-uppercase text-muted">Waka Kesiswaan</span>
                                <br>
                                <p><small>bertanggung jawab kepada Kepala Sekolah dalam melaksanakan tugas-tugas di bidang : 
                                    Menyusun program pembinaan kesiswaan. Melaksanakan bimbingan, pengarahan dan pengendalian kegiatan siswa/OSIS 
                                    dalam rangka menegakkan disiplin dan tata tertib sekolah.</small></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Sri Retna Pratiwi, S.Pd.</h5><span class="small text-uppercase text-muted">Waka Humas</span>
                                <br>
                                <p><small>Waka Humas bertanggung jawab kepada kepala sekolah dalam bidang :
                                    Mengkoordinasikan segala aspek dari setiap urusan / bidang yang akan diinformasikan kepada orang tua / 
                                    wali atau Dinas Instansi lain baik negeri maupun swasta. Mengkoordinir pelayanan terhadap Tamu Dinas, yang berkepentingan 
                                    dengan Kepala Sekolah, Guru, Siswa dan warga sekolah pada umumnya.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
