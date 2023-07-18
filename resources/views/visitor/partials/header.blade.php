<header class="bg-primary py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('assets/img/header/header-1.png') }}" alt="logo header" /></div>
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder mb-2 text-white">{{ env('APP_NAME') ?? '' }}</h1>
                    <p class="lead fw-normal text-white-50 mb-4">
                        {{ env('APP_DESCRIPTION') ?? '' }}
                    </p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#fitur-dasar">Fitur Dasar</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ url('login') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>