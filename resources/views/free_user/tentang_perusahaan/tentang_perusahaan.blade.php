@extends('component.template_free_user')

@section('title', 'Tentang Perusahaan')

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2 style="font-size: 40px">Tentang Perusahaan</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="/beranda"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="/tentang_perusahaan">Tentang Perusahaan</a><i class="icon-angle-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">

            <div class="row mb-4">
                <!-- Kolom Visi -->
                <div class="col-md-6 mb-4 d-flex justify-content-center">
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <h2 class="card-title text-primary"><strong>Visi</strong></h2>
                            <p class="card-text">
                                Visi kami adalah untuk menjadi platform pendidikan terdepan yang membantu meningkatkan
                                kualitas
                                pendidikan melalui berbagai layanan yang mendukung pengembangan akademik dan profesional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Misi -->
                <div class="col-md-6 mb-4 d-flex justify-content-center">
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <h2 class="card-title text-primary"><strong>Misi</strong></h2>

                            <strong></strong> Memberikan layanan bimbingan pendidikan yang berkualitas tinggi dan dapat
                            diakses oleh seluruh kalangan.
                            <strong></strong> Memfasilitasi pembuatan artikel ilmiah untuk membantu mahasiswa dan
                            profesional dalam pengembangan karir mereka.
                            <strong></strong> Menyediakan layanan olah data yang efisien untuk mendukung penelitian dan
                            pengembangan di berbagai bidang.
                            <strong></strong> Menawarkan layanan percetakan dengan hasil yang memuaskan dan tepat waktu
                            untuk mendukung kebutuhan akademik dan bisnis.

                        </div>
                    </div>
                </div>


            </div>

            <!-- Bagian Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body">
                            <h3 class="card-title text-primary">Lokasi Cabang Perusahaan</h3>
                            <!-- Google Maps dengan titik koordinat -->
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=-3.7918038319992613,114.80554134826764"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
