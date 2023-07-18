<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>{{ env('APP_NAME') }}</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/' . env('APP_FAVICON')) }}" />
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">            
            
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <a href="{{ url('/') }}" class="link-primary text-decoration-none">
                                <div class="py-5 center col-md-8 mx-auto">
                                    <div class="bg-gradient text-white rounded-3 mb-3 d-block">
                                        <img src="{{ asset('assets/img/logo/logo-kominfo.png') }}" alt="Logo header" height="100px" class="rounded p-2 bg-white shadow">
                                    </div>
                                    <div>
                                        <h5 class="h1 d-block">{{ env('APP_NAME') ?? '' }}</h5>
                                        <p class="d-block text-uppercase">{{ env('APP_DESCRIPTION') ?? '' }}</p>
                                    </div>
                                </div>
                            </a>

                            <h1 class="fw-bolder text-primary display-2">Login</h1>
                            <p class="lead fw-normal text-muted mb-0">Masukan alamat email dan kata sandi Anda!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
        
                                        <div class="mb-3">
                                            <label for="alamatEmail" class="form-label">Alamat Email</label>
                                            <input type="email" id="alamatEmail"
                                                class="form-control rounded-0 @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="Masukan alamat email" required
                                                autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- group item end -->
        
                                        <div class="mb-3">
                                            <label for="kataSandi" class="form-label">Kata Sandi</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="kataSandi"
                                                    class="form-control rounded-0 @error('password') is-invalid @enderror" name="password"
                                                    placeholder="Masukan kata sandi" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- group item end -->
        
                                        <div class="d-block">
                                            <button class="btn btn-lg btn-primary w-100 rounded-0" type="submit">
                                                <i class="fa-solid fa-sign-in"></i> Masuk
                                            </button>
                                        </div>
        
                                    </form>
                                    <!-- FORM END -->

                                    <div class="py-5 text-center">
                                        <a href="{{ 'beranda' }}" class="btn">
                                            <i class="fa-solid fa-arrow-left"></i> Kembali
                                        </a>
                                        <small class="text-muted d-block py-5">
                                            {{ env('APP_COPYRIGHT') ?? '' }}
                                        </small>
                                    </div>

                                </div>
                        </div>
                    </div>
                    
                </div>
            </section>

        </main>
        
        <!-- Footer Scripts-->
        @include('visitor.scripts.footer-scripts')
        
        <!-- SB Form js-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>














