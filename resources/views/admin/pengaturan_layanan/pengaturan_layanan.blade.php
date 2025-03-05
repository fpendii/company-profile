@extends('component.template_admin')

@section('title', 'Pengaturan')

@php
    $page = 'Pengaturan Data Usaha';
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
    <div class="row p-3">
        @foreach ($layanans as $item)
            <div class="col-xl-6 mb-xl-4 mb-4">
            <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl"
                    style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 p-3">
                        <h5 class="text-white mt-4 mb-5 pb-2">{{ $item->nama_layanan }}</h5>
                        <div class="d-flex">
                            <div class="d-flex">
                                <div>
                                    <p class="text-white text-sm opacity-8 mb-0">Total Client</p>
                                    <h6 class="text-white mb-0">{{ $item->total_client }}</h6>
                                </div>
                            </div>
                            <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                <a href="/admin/pengaturan/layanan/edit/{{ $item->id }}" class="btn btn-primary">Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
