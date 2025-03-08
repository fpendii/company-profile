@extends('component.template_free_user')

@section('title', 'Beranda')

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Berita</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="/beranda"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="/berita">berita</a><i class="icon-angle-right"></i></li>
                        <li>Baca Selengkapnya</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="">
                        <article>
                            <div class="row">
                                <div class="">
                                    <div class="post-slider">
                                        <div class="post-heading">
                                            <h3><a href="/berita/detail/{{ $dataBerita->id }}">{{ $dataBerita->judul }}</a></h3>
                                        </div>
                                        <!-- start flexslider -->
                                        <div class="flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <img src="{{ asset('storage/' . $dataBerita->gambar) }}" alt="" />
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- end flexslider -->
                                    </div>
                                    <p>
                                        {{ $dataBerita->konten }}
                                    </p>
                                    <div class="bottom-article">
                                        <ul class="meta-post">
                                            <li><i class="icon-calendar"></i><a href="#">
                                                    {{ $dataBerita->tanggal_publish }}</a></li>
                                        </ul>
                                        <a href="/berita/detail/{{ $dataBerita->id }}" class="pull-right">Baca selengkapnya <i
                                                class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                </div>
            </div>
        </div>
    </section>
@endsection
