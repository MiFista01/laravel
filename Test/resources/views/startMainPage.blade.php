@extends('layouts.appMain')
@section('content')
<h1>Welcome Evens Portal</h1>
<h2>Closest events</h2>
@foreach ($events as $item)
<div class="card" style="width: 18rem;">
  <img src="./images/{{ $item['image'] }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $item['title'] }}</h5>
    <p class="card-text">{{ $item['title'] }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
@endsection
