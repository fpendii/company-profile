@extends('component.template_free_user')

@section('title', 'Beranda')

@section('content')
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <div id="nivo-slider">
            <div class="nivo-slider">
                <!-- Slide #1 image -->
                <img src="/template-free-user/img/hero-bimbingan-belajar.png" alt="" title="#caption-1" />
                <!-- Slide #2 image -->
                <img src="/template-free-user/img/hero-bimbingan-belajar.png" alt="" title="#caption-2" />
                <!-- Slide #3 image -->
                <img src="/template-free-user/img/hero-bimbingan-belajar.png" alt="" title="#caption-3" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <!-- Slide #1 caption -->
                        <div class="nivo-caption" id="caption-1">
                            <div>
                                <h2><strong>{{ $dataUsaha->nama_usaha }}</strong></h2>
                                <p>
                                    {{ $dataUsaha->slogan }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slider -->
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <h2>Selamat Datang di <strong>Ratna Education</strong></h2>
                    {!! $dataUsaha->penjelasan_usaha !!}


                    {{-- <p style="text-align: justify">
                        Ratna Education menyediakan berbagai layanan untuk mendukung pengembangan akademik dan praktis Anda.
                        Layanan bimbingan mahasiswa bertujuan untuk membantu mahasiswa meraih keberhasilan akademik melalui
                        sesi bimbingan yang disesuaikan. Kami juga menawarkan bimbingan umum untuk mengembangkan
                        keterampilan seperti komunikasi dan kepemimpinan.
                    </p>
                    <p style="text-align: justify">
                        Selain itu, kami mendukung penulisan dan penerbitan artikel ilmiah bagi Anda yang membutuhkan
                        bantuan untuk memenuhi tugas akademik atau publikasi. Layanan olah data kami memungkinkan Anda untuk
                        menganalisis data dengan tepat guna, sementara layanan percetakan kami memberikan hasil cetak
                        berkualitas tinggi untuk kebutuhan profesional.
                    </p> --}}
                </div>
                <div class="span6">
                    <!-- start flexslider -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="/template-free-user/img/works/full/image-01-full.jpg" alt="" />
                            </li>
                            <li>
                                <img src="/template-free-user/img/works/full/image-02-full.jpg" alt="" />
                            </li>
                            <li>
                                <img src="/template-free-user/img/works/full/image-03-full.jpg" alt="" />
                            </li>
                        </ul>
                    </div>
                    <!-- end flexslider -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3 class="heading text-center"><span class="highlight"><strong>Layanan Kami</strong></span></h3>
                <div class="span12">
                    <!-- Baris pertama -->
                    <div class="row" style="background-color: #f5f5f5; padding: 30px 0; border-radius: 10px;">
                        <div class="span4">
                            <div class="box aligncenter">
                                <div class="aligncenter icon">
                                    <i class="fa-solid fa-user-graduate icon-circled icon-64 active"></i>
                                </div>
                                <div class="text">
                                    <h6>{{ $layananBimbinganMahasiswa->nama_layanan }}</h6>
                                    <p>{{ $layananBimbinganMahasiswa->penjelasan }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="box aligncenter">
                                <i class="fa-solid fa-user-tie icon-circled icon-64 active"></i>
                                <div class="text">
                                    <h6>{{ $layananBimbinganUmum->nama_layanan }}</h6>
                                    <p>{{ $layananBimbinganUmum->penjelasan }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="box aligncenter">
                                <i class="fa-solid fa-newspaper icon-circled icon-64 active"></i>
                                <div class="text">
                                    <h6>{{ $layanaArtikelIlmiah->nama_layanan }}</h6>
                                    <p>{{ $layanaArtikelIlmiah->penjelasan }}</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Spacer antara baris -->
                    <div style="height: 30px;"></div>

                    <!-- Baris kedua -->
                    <div class="row" style="background-color: #e9ecef; padding: 30px 0; border-radius: 10px;">
                        <div class="span6">
                            <div class="box aligncenter">
                                <i class="fa-solid fa-table icon-circled icon-64 active"></i>
                                <div class="text">
                                    <h6>{{ $layananOlahData->nama_layanan }}</h6>
                                    <p>{{ $layananOlahData->penjelasan }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="box aligncenter">
                                <i class="fa-solid fa-print icon-circled icon-64 active"></i>
                                <div class="text">
                                    <h6>{{ $layananPercetakan->nama_layanan }}</h6>
                                    <p>{{ $layananPercetakan->penjelasan }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- divider -->
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->

        </div>
        <section class="callaction">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="big-cta">
                            <div class="cta-text">
                                <h3>Total <span class="highlight"><strong>Client</strong></span></h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                  <div class="row">
                    <div class="span3">
                      <div class="box aligncenter">
                        <div class="aligncenter icon">
                            <i class="fa-solid fa-user-graduate icon-circled icon-64 active"></i>
                        </div>
                        <div class="text">
                          <h6>{{ $layananBimbinganMahasiswa->total_client }}</h6>
                        </div>
                      </div>
                    </div>
                    <div class="span3">
                      <div class="box aligncenter">
                        <div class="aligncenter icon">
                            <i class="fa-solid fa-user-tie icon-circled icon-64 active"></i>
                        </div>
                        <div class="text">
                          <h6>{{ $layananBimbinganUmum->total_client }}</h6>

                        </div>
                      </div>
                    </div>
                    <div class="span3">
                      <div class="box aligncenter">
                        <div class="aligncenter icon">
                            <i class="fa-solid fa-newspaper icon-circled icon-64 active"></i>
                        </div>
                        <div class="text">
                          <h6>{{ $layanaArtikelIlmiah->total_client }}</h6>

                        </div>
                      </div>
                    </div>
                    <div class="span3">
                      <div class="box aligncenter">
                        <div class="aligncenter icon">
                            <i class="fa-solid fa-table icon-circled icon-64 active"></i>
                        </div>
                        <div class="text">
                          <h6>{{ $layananOlahData->total_client }}</h6>

                        </div>
                      </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                          <div class="aligncenter icon">
                            <i class="fa-solid fa-print icon-circled icon-64 active"></i>
                          </div>
                          <div class="text">
                            <h6>{{ $layananPercetakan->total_client }}</h6>

                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
        </section>
    </section>

@endsection
