<x-backend.layout>
  <x-slot name="title">
    Resort Management
  </x-slot>

  @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
  @endif
  <div class="container text-center">
    <h3 class="container mb-5">Welcome To Admin Panel</h3>
    
  </div>
</x-backend.layout>
