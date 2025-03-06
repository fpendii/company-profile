@extends('component.template_free_user')

@section('title', 'Bimbingan Umum')

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2 style="font-size: 40px">Layanan</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="/beranda"><i class="icon-home"></i></a> <i class="icon-angle-right"></i></li>
                    <li><a href="/layanan">Layanan</a> <i class="icon-angle-right"></i></li>
                    <li>Bimbingan Mahasiswa</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="portfolio-categ">
                    <li class="{{ Request::is('layanan') ? 'active' : '' }}"><a href="/layanan">Bimbingan Mahasiswa</a></li>
                    <li class="{{ Request::is('layanan/bimbingan-umum') ? 'active' : '' }} active"><a href="/layanan/bimbingan-umum">Bimbingan Umum</a></li>
                    <li class="{{ Request::is('layanan/artikel-ilmiah') ? 'active' : '' }}"><a href="/layanan/artikel-ilmiah">Artikel Ilmiah</a></li>
                    <li class="{{ Request::is('layanan/olah-data') ? 'active' : '' }}"><a href="/layanan/olah-data">Olah Data</a></li>
                    <li class="{{ Request::is('layanan/percetakan') ? 'active' : '' }}"><a href="/layanan/percetakan">Percetakan</a></li>
                </ul>
                <div class="clearfix"></div>

                <div class="row">
                    <section id="projects">
                        <article>
                            <!-- Kiri -->
                            <div class="span6">
                                <div class="post-slider">
                                    <div class="post-heading">
                                        <h3><a href="layanan">{{ $layananBimbinganUmum->nama_layanan }}</a></h3>
                                    </div>
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <img src="/template-free-user/img/bimbel-mahasiswa.jpeg"
                                                    alt="Bimbingan Mahasiswa" />
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-article">
                                        {{ $layananBimbinganUmum->penjelasan }}
                                        {{-- <p>
                                            Layanan bimbingan mahasiswa kami hadir untuk membantu mahasiswa dalam proses
                                            akademik, mulai dari penyusunan skripsi, tesis, hingga disertasi.
                                            Dengan didampingi oleh para ahli berpengalaman, Anda dapat lebih mudah
                                            mencapai target kelulusan tepat waktu dengan kualitas karya ilmiah terbaik.
                                        </p>
                                        <p>
                                            Kami menyediakan berbagai metode konsultasi, baik secara daring maupun tatap
                                            muka, yang disesuaikan dengan kebutuhan mahasiswa.
                                        </p> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- Kanan -->
                            <div class="span6">
                                <div class="post-heading">
                                    <h3>Kategori {{ $layananBimbinganUmum->nama_layanan }}</h3>
                                </div>

                                @foreach ($layananBimbinganUmum->kategoriLayanan as $kategori)
                                    <div class="card shadow-sm p-3 mb-4 rounded" style="background-color: #f0f8ff;">
                                        <h4 class="text-primary"><i class="icon-book"></i>
                                            {{ $kategori->nama_kategori }}</h4>
                                        <p>{{ $kategori->penjelasan }}</p>
                                        <h5>Jurusan:</h5>
                                        <ul class="tags">
                                            @foreach ($kategori->jurusanKategori as $kategoriJurusan)
                                                <li class="btn btn-small btn-info">{{ $kategoriJurusan->jurusan->nama_jurusan }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach

                                <div class="bottom-article">
                                    <a href="/kontak" class="btn btn-primary mt-3">Hubungi Kami untuk Layanan <i
                                            class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
