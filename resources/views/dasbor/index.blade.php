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
                            <div class="card shadow-sm rounded-0">
                                <div class="card-body">
                                    <h3>Dasbor {{ implode(",",auth()->user()->roles()->pluck('display_name')->toArray()) }} </h3>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                    @if (auth()->user()->hasRole('administrator'))

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card bg-primary text-light shadow-sm rounded-0">
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        18
                                    </div>
                                    <div>Jumlah Pegawai</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                        <div class="col">
                            <div class="card bg-primary text-light shadow-sm rounded-0">
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        15
                                    </div>
                                    <div>Hadir hari ini</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                        <div class="col">
                            <div class="card bg-primary text-light shadow-sm rounded-0">
                                <div class="card-body text-center">
                                    <div class="fs-1 fw-bold">
                                        3
                                    </div>
                                    <div>Tidak hadir hari ini</div>
                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                    </div>
                    <!-- .row end -->
                    @endif

                </div>
                <!-- .col end -->
            </div>
            <!-- .row end -->
        </div>
    </section>

  @stop
