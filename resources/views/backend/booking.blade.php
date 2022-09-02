<x-backend.layout>
    <x-slot name="title">
    booking list
  </x-slot>
    @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
    @endif
      <div>

        <div class="navbar navbar-light bg-light">
          <form class="form-inline d-flex">
            <input name="search" class="form-control mr-sm-3" type="text" placeholder="Find" aria-label="Search">
            <button style='margin-left:16px' class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>


  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">email</th>
      <th scope="col">Resort</th>
      <th scope="col">In</th>
      <th scope="col">out</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($bookings as $booking)
    <tr>
      <th scope="row">{{$loop->iteration + $bookings->firstItem() - 1}}</th>
      <td>{{$booking->customer_name}}</td>
      <td>{{$booking->address}}</td>
      <td>{{$booking->phone}}</td>
      <td>{{$booking->email}}</td>
      <td>{{$booking->resort_name}}</td>
      <td>{{$booking->start_date}}</td>
      <td>{{$booking->end_date}}</td>
      <td class="d-flex justify-content-between ">
        <form action="{{route('booking.decline',['booking'=>$booking->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Decline</a>
        </form>

        <form action="{{route('booking.accept',['booking'=>$booking->id])}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary">Accept</a>
        </form>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>
    {{$bookings->links()}}
</x-backend.layout>
