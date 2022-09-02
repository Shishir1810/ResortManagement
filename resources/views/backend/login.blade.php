<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('ui/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('ui/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('ui/login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('ui/login/css/style.css')}}">

    <title>Login</title>
  </head>
  <body>

  <div class="content">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="{{asset('ui/login/images/login.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3> Admin Login</h3>

            </div>
           
            <form action="/login/authenticate" method="POST">
              @csrf

              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" name="email" class="form-control" id="username" value="{{old('email')}}">

                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror

              </div>
              <div class="form-group last mb-4 mt-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">

                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror

              </div>



              <input type="submit" value="Log In" class="btn btn-block btn-primary">


            </form>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{asset('ui/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('ui/login/js/popper.min.js')}}"></script>
    <script src="{{asset('ui/login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ui/login/js/main.js')}}"></script>
  </body>
</html>
