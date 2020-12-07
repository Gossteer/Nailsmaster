@extends('layouts.app')

@section('content')
<div class="container">
    <div class="containerForAdminCard">
        @foreach ($masters as $master)
            <div class="cardForAdmin" style="--cards:5">
                <div class="child"  title="Дата регистрации: {{$master->created_at}}, дата заявки: {{$master->master->created_at}}">
                    <h5 class="atributsForAdminCard" style="margin-top: 8px ">ФИО: {{$master->name . ' ' . $master->surname . ' ' . $master->lastname}}</h5>
                    <h5 class="atributsForAdminCard">Тел: {{$master->phone_number}}</h5>
                    <h5 class="atributsForAdminCard" title="{{$master->master->portfolio->description}}">Описание: {{str_limit($master->master->portfolio->description,20,'...')}}</h5>
                    <h5 class="atributsForAdminCard">Инстаграмм: {{$master->master->portfolio->login_instagram}}</h5>
                    <p>{{$masterPoints = $master->master->masterPoint->count()}} точек</p>
                </div>
                @for ($i = 0; $i < $masterPoints; $i++)
                <div class="child"></div>
                @endfor
            </div>
        @endforeach
    </div>
</div>

@push('styles')

@endsection
