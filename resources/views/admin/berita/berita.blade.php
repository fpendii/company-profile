@extends('component.template_admin')

@section('title', 'Data Berita')

@php
    $page = 'Pengaturan Berita';
@endphp

@section('content')
    @include('component.alert.alert')

    <div class="container mt-4">

        <div class="row">
            <div class="col-12">


                <div class="span6">
                    <h4>Data Berita</h4>
                    <div class="row mb-4 text-end">
                        <div class="col-12">
                            <a href="{{ url('admin/berita/tambah') }}" class="btn btn-primary">Tambah Berita</a>
                        </div>
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="col-1">
                                    No
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Tanggal Publish
                                </th>
                                <th class="col-2">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($beritas as $berita)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td>
                                    {{ $berita->judul }}
                                </td>
                                <td>
                                    {{ $berita->tanggal_publish }}
                                </td>
                                <td>
                                    <a href="{{ url('admin/berita/edit', $berita->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ url('admin/berita/delete', $berita->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                {{ $beritas->links() }}
            </div>
        </div>
    </div>
@endsection
