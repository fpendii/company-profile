@extends('component.template_admin')

@section('title', 'Data Berita')

@php
    $page = 'Pengaturan Berita';
@endphp

@section('content')
    @include('component.alert.alert')

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <a href="{{ url('admin/berita/tambah') }}" class="btn btn-primary">Tambah Berita</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Tanggal Publish</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $berita)
                            <tr>
                                <td>{{ $berita->id }}</td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->slug }}</td>
                                <td>{{ ucfirst($berita->status) }}</td>
                                <td>{{ $berita->tanggal_publish }}</td>
                                <td>
                                    <a href="{{ url('admin/berita/edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ url('admin/berita/delete', $berita->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $beritas->links() }}
            </div>
        </div>
    </div>
@endsection
