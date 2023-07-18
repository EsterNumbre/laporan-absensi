@extends('dasbor.layout.app')
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @include('dasbor.partials.left-sidebar')
                <!-- .col end -->

                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <h3>{{ Str::title(Request::segment(3)) }} {{ Str::title(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan data {{ Request::segment(2) }} secara detail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                    <div class="row mb-3">
                        <div class="col">
                            <form action="{{ url('dasbor/pegawai') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- item group start -->
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <div class="border-bottom pb-3 fs-4">
                                                        {{ $data->nama_lengkap ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                                <!-- item group start -->
                                                <div class="mb-3">
                                                    <label class="form-label">NIP</label>
                                                    <div class="border-bottom pb-3 fs-4">
                                                        {{ $data->nip ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                                <!-- item group start -->
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor HP</label>
                                                    <div class="border-bottom pb-3 fs-4">
                                                        {{ $data->no_hp ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                                <!-- item group start -->
                                                <div class="mb-3">
                                                    <label class="form-label">Alamat Email</label>
                                                    <div class="border-bottom pb-3 fs-4">
                                                        {{ $data->alamat_email ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                                <!-- item group start -->
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <div class="border-bottom pb-3 fs-4">
                                                        {{ $data->deskripsi ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                            </div>

                                            <div class="col-md-6">

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    @if(!empty($data->foto_profil))
                                                    <img src="{{ asset('assets/img/pegawai/' . $data->foto_profil) }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                                    @else 
                                                    <img src="{{ asset('assets/img/pegawai/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                                    @endif
                                                </div>
                                                <!-- form group end -->

                                            </div>
                                        </div>
                                        <!-- .row end -->

                                    </div>
                                    <!-- .card-body end -->

                                    <div class="card-footer">
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2)) }}" 
                                            class="btn btn-outline-dark rounded-0">
                                            <i class="fa-solid fa-arrow-left"></i> ke Halaman Pegawai
                                        </a>
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2).'/ubah', $data->id) }}" 
                                            class="btn btn-dark rounded-0">
                                            <i class="fa-solid fa-edit"></i> Ubah
                                        </a>
                                    </div>
                                    <!-- .card-footer end -->

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- .row end -->

                </div>
                <!-- .col end -->
            </div>
            <!-- .row end -->
        </div>
    </section>

  @stop
