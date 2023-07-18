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
                                        <a href="{{ url('dasbor/pegawai/tambah') }}" class="btn btn-dark rounded-0">
                                            <i class="fa-solid fa-plus"></i> Tambah
                                        </a>
                                    </div>

                                    <!-- table start -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Foto Profil</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($datas as $data)

                                                <tr>
                                                    <td>{{ ++$i }}</td> 
                                                    <td width="150px">
                                                        <img src="{{ asset('assets/img/pegawai/' . $data->foto_profil ) }}" alt="foto profil" width="100%">
                                                    </td> 
                                                    <td>
                                                        {{ $data->nama_lengkap ?? '' }} 
                                                    </td>
                                                    <td>
                                                        {{ $data->alamat_email ?? '' }}
                                                    </td>
                                                    <td class="d-flex gap-1">
                                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2)  .'/detail', $data->id ) }}" class="btn btn-dark rounded-0">
                                                            <i class="fa-solid fa-file"></i>
                                                        </a>
                                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2) .'/ubah', $data->id ) }}" class="btn btn-outline-dark rounded-0">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>

                                                        <form action="{{ url(Request::segment(1) .'/'. Request::segment(2), $data->id ) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-dark rounded-0 show_confirm">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                    
                                                @endforeach
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


@push('script-footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          swal.fire({
            title: 'Anda Yakin?',
            text: "Data akan terhapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus Permanen!'
          })
          .then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Terhapus!',
                'Data Anda telah terhapus.'
                )
            }
        });
      });

</script>
@endpush