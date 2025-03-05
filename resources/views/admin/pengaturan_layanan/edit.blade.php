@extends('component.template_admin')

@section('title', 'Pengaturan')

@php
    $page = 'Layanan';
@endphp

@section('content')
    @include('component.alert.alert')

    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('admin/pengaturan') ? 'active' : '' }}" id="home-tab"
                        href="{{ url('/admin/pengaturan') }}" role="tab" aria-controls="home" aria-selected="true"><i
                            class="fa-solid fa-print"></i> Data Usaha</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('admin/pengaturan/layanan*') ? 'active' : '' }}" id="home-tab"
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
            <form action="{{ url('admin/pengaturan/layanan/simpan/'.$layanan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Bagian Tambah Order -->
                <div id="order-fields" style="display: block;">
                    <div class="mb-3">
                        <label for="nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" value="{{ $layanan->nama_layanan }} "
                            class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" name="nama_layanan"
                            value="{{ old('nama_layanan', $setting->nama_layanan ?? '') }}" readonly>
                        @error('nama_layanan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="penjelasan" class="form-label">Penjelasan</label>
                    <input type="text" class="form-control @error('penjelasan') is-invalid @enderror" id="penjelasan"
                        name="penjelasan" value="{{ $layanan->penjelasan }}" required>
                    @error('penjelasan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input lainnya -->
                <div class="mb-3">
                    <label for="total_client" class="form-label">Total Client</label>
                    <input type="text" class="form-control @error('total_client') is-invalid @enderror"
                        id="total_client" name="total_client" value="{{ $layanan->total_client }}" required>
                    @error('total_client')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tombol Simpan -->
                <div class="d-flex justify-content-between">
                    <a href="{{ url('admin/pengaturan/layanan') }}" class="btn btn-secondary">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>

                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Kategori Layanan</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal"
                                data-bs-target="#addCategoryModal">Tambah Kategori</button>
                        </div>
                    </div>
                </div>

                @foreach ($layanan->kategoriLayanan as $kategori)
                    <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $kategori->nama_kategori }}</h6>
                                    <p>{{ $kategori->penjelasan }}</p>
                                    @foreach ($kategori->jurusan as $jurusan)
                                        <span class="text-xs"> - {{ $jurusan->nama_jurusan }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    <button type="button" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"
                                        data-bs-toggle="modal" data-bs-target="#editCategoryModal{{ $kategori->id }}">
                                        <i class="fas fa-edit text-lg me-1"></i> Edit
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach


            </form>

        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('admin/pengaturan/layanan/tambah-kategori') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryModalLabel">Tambah Kategori</h5>
                        <input type="text" value="{{ $layanan->id}}" name="layanan_id" hidden>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                id="nama_kategori" name="nama_kategori" required>
                            @error('nama_kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="penjelasan_kategori" class="form-label">Penjelasan</label>
                            <input type="text" class="form-control @error('penjelasan_kategori') is-invalid @enderror"
                                id="penjelasan_kategori" name="penjelasan_kategori" required>
                            @error('penjelasan_kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit Kategori -->
    @foreach ($layanan->kategoriLayanan as $kategori)
        <div class="modal fade" id="editCategoryModal{{ $kategori->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ url('admin/pengaturan/layanan/editKategori/'.$kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCategoryModalLabel">Edit Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                    id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
                                @error('nama_kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="penjelasan_kategori" class="form-label">Penjelasan</label>
                                <input type="text" class="form-control @error('penjelasan_kategori') is-invalid @enderror"
                                    id="penjelasan_kategori" name="penjelasan_kategori" value="{{ $kategori->penjelasan }}" required>
                                @error('penjelasan_kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
