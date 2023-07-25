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
                                    <h3>{{ Str::title(Request::segment(3)) }} Tahun {{ Str::title(Request::segment(4)) }} Bulan  {{ Str::title(Request::segment(5)) }}</h3>
                                    <p class="text-muted">Menampilkan laporan absensi pegawai pada tahun {{ Request::segment(4) }} Bulan  {{ Str::title(Request::segment(5)) }}</p>
                                    

                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Status</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($logs as $log)

                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $log->created_at->format('Y-m-d') ?? '' }}</td>
                                                    <td>{{ $log->created_at->format('h:i:s') ?? '' }}</td>
                                                    <td>{{ $log->status ?? '' }}</td>
                                                    <td>{{ $log->keterangan ?? '' }}</td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                    
                                                @empty
                                                    
                                                @endforelse
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    

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

