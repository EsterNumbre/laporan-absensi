@extends('dasbor.layout.app')
@section('content')

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                @include('dasbor.partials.left-sidebar')
                <!-- .col end -->

                <div class="col-md-10">

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <h3>{{ Str::title(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan semua data {{ Request::segment(2) }} yang telah ditambahkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <form action="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" method="GET">
                                            <div class="input-group mb-3">
                                                <input type="search" name="s" class="form-control rounded-0" placeholder="Cari nama {{ Request::segment(2) }}" value="{{ request()->s ?? '' }}">
                                                <button type="submit" class="btn btn-primary rounded-0">
                                                    <div class="fa-solid fa-search me-1"></div> Cari
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- table start -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Foto Profil</th>
                                                    <th>Nama Lengkap</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse($pegawais as $data)

                                                <tr>
                                                    <td width="30">{{ ++$i }}</td> 
                                                    <td width="100px">
                                                        <img src="{{ asset('assets/img/pegawai/' . $data->foto_profil ) }}" alt="foto profil" width="100%">
                                                    </td> 
                                                    <td>
                                                        {{ $data->nama_lengkap ?? '' }} 
                                                    </td>
                                                </tr>
                                                    
                                                @empty

                                                <tr>
                                                    <td colspan="5" class="p-5">
                                                        <i class="fa-solid fas fa-exclamation-circle"></i> Data tidak ditemukan. 
                                                        <a href="{{ url(Request::segment(1) . '/' . Request::segment(2)) }}" class="text-decoration-none fw-bold">
                                                            Muat ulang halaman
                                                        </a>
                                                    </td>
                                                </tr>

                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- table end -->
                                </div>
                            </div>
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