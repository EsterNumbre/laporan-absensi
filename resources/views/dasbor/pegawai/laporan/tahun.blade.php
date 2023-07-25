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
                                    <h3>{{ Str::title(Request::segment(3)) }} Tahun {{ Str::title(Request::segment(4)) }}</h3>
                                    <p class="text-muted">Menampilkan laporan absensi pegawai pada tahun {{ Request::segment(4) }}</p>
                                    

                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem amet, commodi hic nam nemo perferendis officia iste. Vel, rem odit.</p>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/januari') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Januari
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Februari') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Februari
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Maret') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Maret
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/April') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> April
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Mei') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Mei
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Juni') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Juni
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Juli') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Juli
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Agustus') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Agustus
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/September') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> September
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Oktober') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Oktober
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/November') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> November
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/Desember') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Desember
                                    </a>

                                    {{-- <p>
                                        {{ now() }} | {{ now()->month }}
                                    </p> --}}

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

