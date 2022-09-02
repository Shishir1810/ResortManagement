<x-frontend.layout>
    <x-slot name="title">Resort Booking</x-slot>

    @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
    @endif
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Resort</h3>
                        <p>Take vacations, go as many places as you can, you can always make money, you can't awakes make memories</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                @foreach ($resorts as $resort)
                <div class="col-lg-3 col-md-4">
                    <div class="single_place">
                        <div class="thumb">
                            <img  src="{{$resort->image ? asset('storage/'.$resort->image) : asset('/images/no-image.png')}}"style="width:263px;height:156px;">

                            <a href="#" class="prise">{{ $resort->price }}&#2547;</a>
                        </div>
                        <div class="place_info">
                            <a href="">
                                <h3>{{Str::limit($resort->name,15)}}</h3>
                            </a>

                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">

                                    {{$resort->is_available ? 'Available':'Unavailabe'}}
                                </span>
                                <a href="{{route('home.booking',$resort->id)}}" class="btn btn-success">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$resorts->links()}}

        </div>
    </div>
</x-frontend.layout>



