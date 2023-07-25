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
                                    <h3>{{ Str::title(Request::segment(2)) }} {{ Str::title(Request::segment(3)) }} </h3>
                                    <p class="text-muted">Menampilkan semua data {{ Request::segment(3) }} per tahun.</p>


                                    <div class="mb-3">
                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/2022') }}" class="btn btn-dark rounded-0">
                                            <i class="fa-solid fa-bookmark"></i> Tahun 2022
                                        </a>

                                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.Request::segment(3).'/'.now()->year) }}" class="btn btn-dark rounded-0">
                                            <i class="fa-solid fa-bookmark"></i> Tahun {{ now()->year }}
                                        </a>
                                    </div>

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

