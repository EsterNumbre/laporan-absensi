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
                                    <h3>Dasbor {{ Str::title(implode(",",auth()->user()->roles()->pluck('display_name')->toArray())) }} </h3>
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
                    @elseif (auth()->user()->hasRole('pegawai'))

                    

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="card rounded-0">
                                <div class="card-body">

                                    <h5>Lengkapi log / catatan hari ini</h5>

                                    <p class="text-muted">Daftar log atau catatan absensi bulan ini</p>

                                    
                                    @if($todayLog != NULL)
                                        <a href="" class="btn btn-sm btn-primary rounded-0">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    @else 

                                     <!-- form start -->
                                     <form action="" action="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="" class="form-label">Status</label>
                                            <select name="" id="" class="form-select rounded-0" required>
                                                <option value="" selected hidden></option>
                                                <option value="Masuk">Masuk</option>
                                                <option value="Izin">Izin</option>
                                            </select>
                                        </div>
                                        <!-- input group end -->

                                        <div class="mb-3">
                                            <label for="" class="form-label">Keterangan</label>
                                            <textarea name="" id="" cols="30" rows="3" class="form-control rounded-0" required name="keterangan"></textarea>
                                        </div>
                                        <!-- input group end -->

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal : </label>
                                            {{ now()->format('d-m-Y') }}
                                        </div>
                                        <!-- input group end -->

                                        <div class="mb-3">
                                            <label for="" class="form-label">Jam : </label>
                                            {{ now()->format('h:i:s') }}
                                        </div>
                                        <!-- input group end -->

                                        <button class="btn btn-primary rounded-0 fw-bold w-100">
                                            <i class="fa-solid fa-paper-plane"></i> Kirim
                                        </button>
                                        <!-- button end -->

                                    </form>
                                    <!-- form end -->


                                    @endif
                                   

                                </div>
                            </div>
                        </div>
                        <!-- .col end -->
                        <div class="col-md-8">
                            <div class="card rounded-0">
                                <div class="card-body">

                                    <h5>Daftar logs / catatan bulan ini</h5>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Status</th>
                                                    <th>Keterangan</th>
                                                    <th></th>
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

                                                        @if ($log->created_at->format('d') == now()->format('d'))
                                                            <a href="" class="btn btn-sm btn-primary rounded-0">
                                                                <i class="fa-solid fa-pencil"></i>
                                                            </a>
                                                        @endif
                                                        
                                                    </td>
                                                </tr>
                                                    
                                                @empty
                                                    
                                                @endforelse
                                                
                                            </tbody>
                                        </table>
                                    </div>


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
