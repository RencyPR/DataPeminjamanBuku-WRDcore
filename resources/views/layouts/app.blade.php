<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Peminjaman')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color:rgb(249, 233, 227);;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            {{-- Header --}}
            <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-color:rgb(181, 93, 0);">
                <div class="container-fluid justify-content-center">
                    <span class="navbar-brand mb-0 fs-3">⚜️BALAI PUSTAKA PRADIPA ⚜️</span>
                </div>
            </nav>

            {{-- Main Content --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
