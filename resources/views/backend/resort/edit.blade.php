<x-backend.layout>
  <x-slot name="title">
    Edit Resort
  </x-slot>
  @if (session()->has('message'))
  <div class="alert alert-info" role="alert">
  <p>
    {{session('message')}}
  </p>
  </div>
  @endif

  <form method="POST" action="{{ route('resort.update', ['resort' => $resort->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group col-6">
      <label for="name" class="inline">Resort Name</label>
      <input name="name" type="text" class="form-control" value="{{old('name',$resort->name)}}"/>

      @error('name')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="description" class="inline">Resort Details</label>
      <textarea name="description" class="form-control">{{old('description',$resort->description)}}</textarea>
      @error('description')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="location" class="inline">Resort Location</label>
      <input name="location" type="text" class="form-control" value="{{old('location',$resort->location)}}"/>

      @error('location')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="price" class="inline">Resort price</label>
      <input name="price" type="number" step=".01" class="form-control" value="{{old('price',$resort->price)}}"/>

      @error('price')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <div class="d-block mt-2">
        <label for="image">
        Image
        </label>
      <input
          type="file"
          class="form-control-file"
          name="image"
      />
      <div class="d-block mt-2">
        <img
        src="{{$resort->image ? asset('storage/'.$resort->image) : asset('/images/no-image.png')}}"
        alt="" width="200px"
    />
</div>
      </div>

    </div>
      <div class="form-check mt-2">
      <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" {{ $resort->is_available ? 'checked' : '' }} >
      <label class="form-check-label" for="isActiveInput">
          Is Availabe
      </label>
      </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
  </form>

</x-backend.layout>
