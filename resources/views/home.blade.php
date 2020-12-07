@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="--cards:5">
      <div class="child">
        <h2>Why do I need a will</h2>
        <p>5 articles</p>
      </div>
      <div class="child">
        <h2>Why do I need a will</h2>
        <p>5 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:3">
      <div class="child">
        <h2>How to choose who inherits your estate</h2>
        <p>3 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:2">
      <div class="child">
        <h2>What happens when you die</h2>
        <p>2 articles</p>
      </div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:4">
      <div class="child">
        <h2>How to choose guardians</h2>
        <p>4 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:4">
      <div class="child">
        <h2>Why you've been disinherited</h2>
        <p>4 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:3">
      <div class="child">
        <h2>How to commit fraud, legally</h2>
        <p>3 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:5">
      <div class="child">
        <h2>Stay together for the kids</h2>
        <p>5 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
    <div class="card" style="--cards:3">
      <div class="child">
        <h2>Picking music for your funeral</h2>
        <p>3 articles</p>
      </div>
      <div class="child"></div>
      <div class="child"></div>
    </div>
  </div>

@push('styles')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endpush

@endsection
