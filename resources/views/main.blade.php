<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    @include('layouts.nav')
    <div class="container">
        <div class="row">
            <h4 class="font-weight-bold mt-3">Trending today</h4>
            <div class="col-sm-12 col-lg-3">
                <div class="card text-white bg-primary mx-auto mb-3" style="max-width: 18rem;height: 10rem">
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card text-white bg-primary mx-auto mb-3" style="max-width: 18rem;height: 10rem">
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card text-white bg-primary mx-auto mb-3" style="max-width: 18rem;height: 10rem">
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3">
                <div class="card text-white bg-primary mx-auto mb-3" style="max-width: 18rem;height: 10rem">
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title img</h5>
                            </div>
                            <div class="card-body">
{{--                                <h5 class="card-title">Card title</h5>--}}
                                <p class="card-text">This is a longer card with is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    @include('common.create-community')

<!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>
