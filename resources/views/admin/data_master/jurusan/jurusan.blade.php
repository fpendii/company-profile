@extends('component.template_admin')

@section('title', 'Data Master')

@php
    $page = 'Pengaturan Data Usaha';
@endphp

@section('content')
    @include('component.alert.alert')

    <div class="card mb-2">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ Request::is('admin/data-master*') ? 'active' : '' }}" id="home-tab"
                        href="{{ url('/admin/data-master') }}" role="tab" aria-controls="home" aria-selected="true"><i
                            class="fa-solid fa-print"></i>Jurusan</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Button Tambah -->


    <div class="row ">
        <div class="col-12">
            <div class="card mb-4 p-2">
                <div class="row mb-3 text-start">

                    <div class="col-12 pt-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addCategoryModal">
                            <i class="fas fa-plus-circle"></i> Tambah Jurusan
                        </button>
                    </div>
                </div>

                <div class="card-body px-0 pt-0 p-2 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jurusan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jurusan as $item)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->nama_jurusan }}</p>
                                        </td>

                                        <td class="align-middle text-center col-3">
                                            <div class="d-flex align-items-center text-sm">
                                                <button type="button" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#editCategoryModal{{ $item->id }}">
                                                    <i class="fas fa-edit text-lg me-1"></i> Edit
                                                </button>
                                                <button type="button"
                                                    class="btn btn-link text-danger text-sm mb-0 px-0 ms-4"
                                                    data-bs-toggle="modal" data-bs-target="#deleteCategoryModal{{ $item->id }}">
                                                    <i class="fas fa-trash-alt text-lg me-1"></i> Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editCategoryModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Jurusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('admin/data-master/jurusan/update/' . $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="editJurusanName" class="form-label">
                                                                Jurusan</label>
                                                            <input type="text" class="form-control" id="editJurusanName" name="nama_jurusan"
                                                                value="{{ $item->nama_jurusan }}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="deleteCategoryModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteCategoryModalLabel">Hapus Jurusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus jurusan {{ $item->nama_jurusan }}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="/admin/data-master/jurusan/hapus/{{ $item->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Tambah Jurusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/data-master/jurusan/tambah') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="jurusanName" class="form-label">Nama Jurusan</label>
                            <input type="text" class="form-control" name="nama_jurusan" id="jurusanName"
                                placeholder="Masukkan nama jurusan">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
