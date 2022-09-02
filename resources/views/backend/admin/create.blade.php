<x-backend.layout>
  <x-slot name="title">
    Create Admin
  </x-slot>
    @if (session()->has('message'))
        <div class="alert alert-info" role="alert">
        <p>
          {{session('message')}}
        </p>
        </div>
    @endif

  <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <!-- create new Admin form -->
                      <form class="mx-1 mx-md-4" method="POST" action="/users">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Admin Name</label>
                            <input type="text" name="name" id="form3Example1c" class="form-control" value="{{old('name')}}" />


                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Admin Email</label>
                            <input type="email" name="email" id="form3Example3c" class="form-control" value="{{old('email')}}"/>


                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" name="password" id="form3Example4c" class="form-control" />

                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>

                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Repeat password</label>
                            <input type="password" name="password_confirmation"
                            id="form3Example4cd" class="form-control" />


                            @error('password_confirmation')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Sing in</button>
                        </div>

                      </form>

                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
</x-backend.layout>
