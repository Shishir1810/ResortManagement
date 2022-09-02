<x-backend.layout>
    <x-slot name="title">
    Admin list
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

          <a href="{{route('admin.create')}}" class="btn btn-primary">Create Admin</a>
        </div>
      </div>


  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($admins as $admin)
    <tr>
      <th scope="row">{{$loop->iteration + $admins->firstItem() - 1}}</th>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>

     
    @endforeach
  </tbody>
</table>

</x-backend.layout>
