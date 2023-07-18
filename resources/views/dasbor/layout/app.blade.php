<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dasbor - {{ env('APP_NAME') ?? '' }}</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/' . env('APP_FAVICON')) }}" />
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Sweet Alert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.18/sweetalert2.min.js" integrity="sha512-w7iWPJKtRcGuYa3Q52yOCaCgu1VC0Xuza34spZheOpS94AbzOIr5RLCojyX/UlnG7aJuGhWnPBQUla9ikd1UoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>
    <body class="d-flex flex-column h-100">
        
        <main class="flex-shrink-0">
            
            <!-- Header-->
            @include('dasbor.partials.nav')

            <!-- Content-->
            @yield('content')

        </main>

        <!-- Footer-->
        @include('dasbor.partials.footer')   
        @stack('script-footer')             
        @include('sweetalert::alert') 

    </body>
</html>
