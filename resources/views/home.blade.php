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
                    <h2 class="name mt-3">{{($master->name . $master->surname . $master->lastname) ? ($master->name . ' ' . $master->surname . ' ' . $master->lastname) : $master->email}}</h2>
                    <div class="title"><a href="https://www.instagram.com/{{$master->master->portfolio->login_instagram}}/">{{$master->master->portfolio->login_instagram}}</a> </div>
                    <div class="actions">
                        <div class="follow-info">
                            {{-- <h2><a href="#"><span>{{$master->master->masterPoint->count()}}</span><small>Точек</small></a></h2> --}}
                            <h2><a href="tel:{{$master->phone_number}}"><span>{{$master->phone_number}}</span><small>Телефон</small></a></h2>
                        </div>
                        <div class="follow-info">
                            <h2><a href="mailto:{{$master->email}}"><span>{{$master->email}}</span><small>Телефон</small></a></h2>
                        </div>
                        <div class="follow-info">
                            <h2><a><span>{{$master->created_at->format('d.m.y')}}</span><small>Регистрация</small></a></h2>
                            <h2><a><span>{{$master->master->created_at->format('d.m.y')}}</span><small>Подача заявки</small></a></h2>
                        </div>
                        <div class="follow-info">
                            <h2><a><span>{{$master->master->masterPoint->count()}}</span><small>Точек</small></a></h2>
                            <h2><a ><span>{{$master->master->confirmation ? 'Да' : 'Нет'}}</span><small>Подтверждение</small></a></h2>
                        </div>
                        <div class="follow-btn">
                            <button>{{$master->master->confirmation ? 'Отозвать' : 'Одобрить'}}</button>
                        </div>
                    </div>
                    <div class="desc">Описание: {{$master->master->portfolio->description}}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('styles')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endpush

@endsection



