
</html>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/xfavicon.png.pagespeed.ic.wMitKZxI7V.webp">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('ui/Frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/Frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/Frontend/css/style.css') }}">

</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="">

                                        <img src="data:image/webp;base64,UklGRrQDAABXRUJQVlA4TKgDAAAviQAKEGfBqG0kScm8rgW0/HnNhIaCtm0Yd+PP+KFp20hu95+fwvMH+GUUSbaTP9cf2CVzxAKFgOzfAR5w8AMCbvqciM1DU91ZyvufpViap/Jn6E0W2K+9d/r9//6JYVWqOCPREMIiIIQBVmpYIwSIgJACpgQR/gYHaQIiIizZtu2oce5aNUqfJzkESka4wyUd8v8/CAhMopVpRP8nAGIkyXGbBQ6A8A6Qf7o40rKdQET/J0Abpz+XB8Dj8n5Szd37k+Ln2dXKzkCOwTtwvosZGKxKTYJrozlo3kRIbYXOMHotj+OC5O8w1MYG6LRrBw+ry0ButLPPPKrSkyftPmWGijTQaM/mmVpJHtpqWKLTngFIktSSXC16Ru1oF+jJM92JG97K/0kq5ysO/A7Tg+wjYWECV/T2vTz/j077Ss9V25vE6BzZFhSJ/57+lSfNtgDRFAla9qSi5c/fP+sv/tJE1la7QCc5sq3og6YGHXHL9CB7SZGg9Z7+BbkEpVJMUsit97qvU/JTLvGy2nvbPwm79V63d6Xb4BOjk+TIVtByfwHkCRTpLNwRpATHS3Ck0HBHeHUm7jjXA19miWiSFAkq9KSXLEbvSWExk1leVEmT6jWGpMYqZnsx3oTFKmZlMYMkcGUBBklyZCsRvISt21hBkjYEqbDCFWFLBiZJB/KLCkeSDIoDjwJLwCApErR+gRdV+RZ1G5gUYV+ZFaTKkFsZLxZVbmc+jAWB+SBHtoL7y8qDe+zjqNGvSZU0KV6GpwDZK+A4FVpaYIgElR/F6sS9EkTJ4EiC2d3xxsDejfiSwHq2Mk8+QuhAr6V4mnykypDz9nt3ugJLBa3KG+5H6KwtSfZQmAqL7RW9dg6kd4FYEFjNXht7+gMcSLrTQ4S0WeHqtC8IivdxPGnN0srotPVJcwCD6PQHNdqg6s4QnV32i8F0wqJJ0gfNSmA5mrZOZDtAgBokVZ4SwHHCYgRJBT4vEtQghQZ29cQlS0udtkeiDqACq/dFe9KEIT/B6n3CCC9UYfUOfHQ78AuBefba7sDt8On7p6VF9pQnsIrgeAXSg04HmEV3o17aE2Am+ZHbwsdsdNrxxl1HPWb6xWgW9fNoFvVsmW6WgWjasSW7w/z/FrykNudOe06JTvWMpEm7W+Kqmo6kaa8pMVpVbIR2nzYxmiob4TatXG4r7gZXU3W7DINfgIVpADrV2EXgef59mp1+nZ/A3anSLmaKc3SqedPf8yzf+8b0/w4="
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">HOME</a></li>
                                            <li><a href="{{route('admin.dashboard')}}">ADMIN</a></li>

                                        </ul>
                                        </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    {{ $slot }}

    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('ui/Frontend/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('ui/Frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ui/Frontend/js/popper.min.js') }}"></script>

    <script src="{{ asset('ui/Frontend/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('ui/Frontend/js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('ui/Frontend/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('ui/Frontend/js/slick.min.js') }}"></script>

    <script src="{{ asset('Frontend/js/jquery.validate.min.js') }}"></script>


    <script async src="{{ asset('Frontend/js/jss.js') }}"></script>

    <script defer src="{{asset('Frontend/js/jmn.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
