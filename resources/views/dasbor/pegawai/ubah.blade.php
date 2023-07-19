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
                                    <h3>{{ Str::title(Request::segment(3)) }} {{ Str::title(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan formulir untuk menambah data {{ Request::segment(2) }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                    <div class="row mb-3">
                        <div class="col">
                            <form action="{{ url('dasbor/pegawai', $data->id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-danger" title="bagian ini wajib dilengkapi" role="button">*</span></label>
                                                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') ?? $data->nama_lengkap  }}" class="form-control rounded-0">
                                                    
                                                    @if ($errors->has('nama_lengkap'))
                                                        <span class="text-danger" role="alert">
                                                            <small class="pt-1 d-block">
                                                                <i class="fe-alert-triangle mr-1"></i> {{ $errors->first('nama_lengkap') }}
                                                            </small>
                                                        </span>
                                                    @endif <!-- error message end -->

                                                </div>
                                                <!-- form group end -->

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="nip" class="form-label">NIP</label>
                                                    <input type="text" name="nip" id="nip" value="{{ old('nip') ?? $data->nip  }}" class="form-control rounded-0">
                                                </div>
                                                <!-- form group end -->

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="no_hp" class="form-label">Nomor HP</label>
                                                    <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') ?? $data->no_hp  }}" class="form-control rounded-0">
                                                </div>
                                                <!-- form group end -->

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="alamat_email" class="form-label">Alamat Email</label>
                                                    <input type="text" name="alamat_email" id="alamat_email" value="{{ old('alamat_email') ?? $data->alamat_email }}" class="form-control rounded-0">
                                                </div>
                                                <!-- form group end -->

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control rounded-0">{{ old('deskripsi') ?? $data->deskripsi }}</textarea>
                                                </div>
                                                <!-- form group end -->

                                            </div>

                                            <div class="col-md-6">

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    
                                                    <div class="mb-2">
                                                        @if(!empty($data->foto_profil))
                                                        <img src="{{ asset('assets/img/pegawai/' . $data->foto_profil) }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                                        @else 
                                                        <img src="{{ asset('assets/img/pegawai/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                                        @endif
                                                    </div>

                                                    <label for="foto_profil" class="form-label d-block">Foto Profil</label>
                                                    <div class="custom-file w-100">
                                                        <input type="file" name="foto_profil" class="custom-file-input" id="foto_profil" value="">
                                                        <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                                        <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                                        @if ($errors->has('foto_profil'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('foto_profil') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>

                                                </div>
                                                <!-- form group end -->

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="p-2 mb-3 bg-light"><i class="fa-solid fa-key"></i> Ganti Kata Sandi</h5>

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="kata_sandi" class="form-label">Kata Sandi</label>
                                                        <input type="text" name="kata_sandi" id="kata_sandi" value="{{ old('kata_sandi') ?? '' }}" class="form-control rounded-0">
                                                    </div>
                                                    <!-- form group end -->

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="konfirmasi_kata_sandi" class="form-label">Konfirmasi Kata Sandi</label>
                                                        <input type="text" name="konfirmasi_kata_sandi" id="konfirmasi_kata_sandi" value="{{ old('konfirmasi_kata_sandi') ?? '' }}" class="form-control rounded-0">
                                                    </div>
                                                    <!-- form group end -->

                                                </div>
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
                                        <button class="btn btn-dark rounded-0">
                                            <i class="fa-solid fa-save"></i> Simpan
                                        </button>
                                    </div>
                                    <!-- .card-body end -->

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
