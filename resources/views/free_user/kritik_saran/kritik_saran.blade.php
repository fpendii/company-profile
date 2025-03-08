@extends('component.template_free_user')

@section('title', 'Beranda')

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2 style="font-size: 40px">Kritik dan Saran</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="/beranda"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <li><a href="/kritik-saran">Kritik dan Saran</a><i class="icon-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Spacer antara baris -->
<div style="height: 50px;"></div>

<div class="container">
    <div class="row">
        <div class="span12">
            <h4>Hubungi kami dengan mengisi formulir kontak di bawah ini</h4>

            <!-- Notifikasi Berhasil -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Notifikasi Gagal -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="/kritik-saran/kirim" method="post" class="contactForm">
                @csrf

                <div class="row">
                    <div class="span4 form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="span4 form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="span4 form-group">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subjek" value="{{ old('subject') }}">
                        @error('subject')
                            <div class="invalid-feedback" style="color: red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="span12 margintop10 form-group">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="12" placeholder="Pesan">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback" style="color: red">{{ $message }}</div>
                        @enderror
                        <p class="text-center">
                            <button class="btn btn-large btn-theme margintop10" type="submit">Kirim Email</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
