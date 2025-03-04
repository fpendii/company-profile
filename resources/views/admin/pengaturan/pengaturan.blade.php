@extends('component.template_admin')

@section('title', 'Pengaturan')

@php
    $page = 'Pengaturan Data Usaha';
@endphp

@section('content')

    <!-- CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    @include('component.alert.alert')

    <div class="card mb-2">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('admin/pengaturan') ? 'active' : '' }}" id="home-tab"
                        href="{{ url('/admin/pengaturan') }}" role="tab" aria-controls="home"
                        aria-selected="true"><i class="fa-solid fa-print"></i> Data Usaha</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('admin/pengaturan/layanan') ? 'active' : '' }}" id="home-tab"
                        href="{{ url('admin/pengaturan/layanan') }}" role="tab" aria-controls="home"
                        aria-selected="true"><i class="fa-solid fa-book"></i> Layanan </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>{{ Str::of($page)->replace('-', ' ')->title() }}</h6>
        </div>
        <div class="card-body">

            <!-- Form -->
            <form action="{{ url('admin/pengaturan/simpan') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Bagian Tambah Order -->
                <div id="order-fields" style="display: block;">
                    <div class="mb-3">
                        <label for="nama_usaha" class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror" id="nama_usaha"
                            name="nama_usaha" value="{{ old('nama_usaha', $setting->nama_usaha ?? '') }}" required>
                        @error('nama_usaha')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="slogan" class="form-label">Slogan</label>
                    <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan"
                        name="slogan" value="{{ old('slogan', $setting->slogan ?? '') }}" required>
                    @error('slogan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="tentang_usaha" class="form-label">Tentang Usaha</label>
                    <input type="text" class="form-control @error('tentang_usaha') is-invalid @enderror" id="tentang_usaha"
                        name="tentang_usaha" value="{{ old('tentang_usaha', $setting->tentang_usaha ?? '') }}" required>
                    @error('tentang_usaha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" value="{{ old('alamat', $setting->alamat ?? '') }}" required>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="nomer_telepon" class="form-label">Nomer Telepon</label>
                    <input type="text" class="form-control @error('nomer_telepon') is-invalid @enderror" id="nomer_telepon"
                        name="nomer_telepon" value="{{ old('nomer_telepon', $setting->nomer_telepon ?? '') }}" required>
                    @error('nomer_telepon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quill Editor untuk Penjelasan Usaha -->
                <div class="mb-3">
                    <label for="penjelasan_usaha" class="form-label">Penjelasan Usaha</label>
                    <div id="editor-penjelasan_usaha" style="height: 150px;"></div>
                    <input type="hidden" name="penjelasan_usaha" id="penjelasan_usaha" value="{{ old('penjelasan_usaha', $setting->penjelasan_usaha ?? '') }}" required>
                    @error('penjelasan_usaha')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quill Editor untuk Visi -->
                <div class="mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    <div id="editor-visi" style="height: 150px;"></div>
                    <input type="hidden" name="visi" id="visi" value="{{ old('visi', $setting->visi ?? '') }}">
                    @error('visi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quill Editor untuk Misi -->
                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <div id="editor-misi" style="height: 150px;"></div>
                    <input type="hidden" name="misi" id="misi" value="{{ old('misi', $setting->misi ?? '') }}">
                    @error('misi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Simpan -->
                <div class="d-flex justify-content-between">
                    <a href="{{ url('admin/pengaturan') }}" class="btn btn-secondary">
                       Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Quill -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        var quillVisi = new Quill('#editor-visi', {
            theme: 'snow'
        });
        var quillMisi = new Quill('#editor-misi', {
            theme: 'snow'
        });
        var quillPenjelasanUsaha = new Quill('#editor-penjelasan_usaha', {
            theme: 'snow'
        });

        // Prefill data lama dari hidden input
        quillVisi.root.innerHTML = `{!! old('visi', $setting->visi ?? '') !!}`;
        quillMisi.root.innerHTML = `{!! old('misi', $setting->misi ?? '') !!}`;
        quillPenjelasanUsaha.root.innerHTML = `{!! old('penjelasan_usaha', $setting->penjelasan_usaha ?? '') !!}`;

        // Ambil data saat submit
        document.querySelector('form').onsubmit = function() {
            document.querySelector('#visi').value = quillVisi.root.innerHTML;
            document.querySelector('#misi').value = quillMisi.root.innerHTML;
            document.querySelector('#penjelasan_usaha').value = quillPenjelasanUsaha.root.innerHTML;
        }
    </script>

@endsection
