@extends('layouts.app')

@section('content')

{{-- @push('styles')
    
@endpush --}}

<div class="container">
    <div class="row justify-content">
        @foreach ($masters as $master)
            <div class="col-md-4">
                <div class="cardForAdmin">
                    <div class="banner">
                    </div>
                    {{-- <div class="menu">
                        <div class="opener"><span></span><span></span><span></span></div>
                    </div> --}}
                    <h2 class="name">{{$master->name . ' ' . $master->surname . ' ' . $master->lastname}}</h2>
                    <div class="title"><a href="">{{$master->master->portfolio->login_instagram}}</a> </div>
                    <div class="actions">
                        <div class="follow-info">
                            <h2><a href="#"><span>{{$masterPoints = $master->master->masterPoint->count()}}</span><small>Точек</small></a></h2>
                            <h2><a href="#"><span>{{$master->phone_number}}</span><small>Телефон</small></a></h2>
                        </div>
                        <div class="follow-btn">
                            <button>Follow</button>
                        </div>
                    </div>
                    <div class="desc">Morgan has collected ants since they were six years old and now has many dozen ants but none in their pants.</div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@push('styles')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endpush
=======

>>>>>>> 220f3b093a74dd148bf526a0b1c4abddcfa23b6f
=======

>>>>>>> 220f3b093a74dd148bf526a0b1c4abddcfa23b6f
=======

>>>>>>> 220f3b093a74dd148bf526a0b1c4abddcfa23b6f

@endsection



