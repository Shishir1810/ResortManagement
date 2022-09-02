<x-backend.layout>
    <x-slot name="title">
    Show Resort
  </x-slot>
  <div class="container m-3">
    <a href="{{route('resort.index')}}" class="btn btn-primary">Back Resort List</a>
  </div>

  <div class="container d-flex">
    <img src="{{$resort->image ? asset('storage/'.$resort->image) : asset('/images/no-image.png')}}" alt="resort_image" width="400px">
    <div>
        <div class="container">
            <h4>Name</h4>
            <p>{{$resort->name}}</p>
          </div>
      <div class="container">
        <h4>Details</h4>
        <p>{{$resort->description}}</p>
      </div>

      <div class="container">
        <h4>Price</h4>
        <p>{{$resort->price}}&#2547;</p>
      </div>

      <div class="container">
        <h4>Availibiliy</h4>
        <p>{{$resort->is_available ? 'Available':'Unavailable'}}</p>
      </div>

      <div class="container">
        <h4>Location</h4>
        <p>{{$resort->location}}</p>
      </div>

      <div class="container">
        <h4>Data Updated</h4>
        <p>{{$resort->updated_at}}</p>
      </div>
    </div>

  </div>

</x-backend.layout>
