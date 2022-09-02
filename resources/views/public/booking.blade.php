<x-frontend.layout>
    <x-slot name="title">Booking page</x-slot>
    @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
       
      </p>
      </div>
    @endif

    <div class="container mt-2">
        <h4>BOOKING INFORMATION FROM</h4>
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="form-outline">
                    <input type="text" name="customer_name" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">name</label>
                </div>



                <div class="form-outline mb-2">
                    <input type="text" name="address" id="form6Example4" class="form-control" />
                    <label class="form-label" for="form6Example4">Address</label>
                </div>


                <div class="form-outline mb-2">
                    <input type="email" name="email" id="form6Example5" class="form-control" />
                    <label class="form-label" for="form6Example5">Email</label>
                </div>


                <div class="form-outline mb-2">
                    <input type="text" name="phone" id="form6Example6" class="form-control" />
                    <label class="form-label" for="form6Example6">Phone</label>
                </div>



                    <input type="hidden" id="resort_name" name="resort_name" value="{{$resorts->name}}">




                <div class="form-outline mb-2">
                    <input type="date" name="start_date" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Check In Date </label>
                </div>


                <div class="form-outline mb-2">
                    <input type="date" name="end_date" id="form6Example3" class="form-control" />
                    <label class="form-label" for="form6Example3">Checkout Date</label>
                </div>


                <button type="submit" class="btn btn-primary btn-block mb-4">Place Booking</button>
            </div>
            <div class="col-md-6">
                <img src="{{$resorts->image ? asset('storage/'.$resorts->image) : asset('/images/no-image.png')}}" alt="resort_image" width="400px">
                <p>Name :  {{$resorts->name}}</p>
                <p>Price : {{$resorts->price}}&#2547;</p>
            </div>
        </div>
        </form>

    </div>



</x-frontend.layout>
