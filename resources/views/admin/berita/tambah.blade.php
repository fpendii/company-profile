@extends('component.template_admin')

@section('title', 'Tambah Berita')

@php
    $page = 'Tambah Berita';
@endphp

@section('content')
    @include('component.alert.alert')

    <div class="container">
        <form action="{{ url('admin/berita/simpan') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="konten">Konten Berita</label>
                <textarea name="konten" id="konten" class="form-control @error('konten') is-invalid @enderror" rows="5">{{ old('konten') }}</textarea required>
                @error('konten')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Berita</label>
                <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" required>
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis') }}" required>
                @error('penulis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="draft" @selected(old('status') == 'draft')>Draft</option>
                    <option value="published" @selected(old('status') == 'published')>Published</option>
                    <option value="archived" @selected(old('status') == 'archived')>Archived</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_publish"required> Tanggal Publish</label>
                <input type="date" name="tanggal_publish" id="tanggal_publish" class="form-control @error('tanggal_publish') is-invalid @enderror" value="{{ old('tanggal_publish') }}">
                @error('tanggal_publish')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <a href="{{ url('admin/berita') }}" type="submit" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
    </div>
@endsection
