<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('libraries.styles')

    <title>Home | XXX</title>
</head>
<body style="height: 100vh;">
   

    <div class="container" style="height:90vh">
        <div class="row justify-content-center" style="margin-top:50px;">
            <div class="col-lg-6">
                @include('components.alerts')
            </div>
        </div>

        @yield('page')
    </div>

    @include('libraries.scripts')
</body>
</html>
