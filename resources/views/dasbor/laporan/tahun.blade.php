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



                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/01') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Januari
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/02') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Februari
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/03') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Maret
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/04') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> April
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/05') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Mei
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/06') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Juni
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/07') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Juli
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/08') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Agustus
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/09') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> September
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/10') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> Oktober
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/11') }}" class="btn btn-dark rounded-0">
                                        <i class="fa-solid fa-bookmark"></i> November
                                    </a>

                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.Request::segment(4).'/12') }}" class="btn btn-dark rounded-0">
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

