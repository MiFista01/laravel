@extends('layouts.appMain')
@section('content')
<div class="search">
  <div class="row">
    @foreach ($events as $item)
    <div class="card">
      <img src="./images/{{ $item['image'] }}" class="card-img-top" alt="...">
      <div class="flex-column align-items-end card-body ">
        <h5 class="card-title">{{ $item['title'] }}</h5>
        <p class="card-text">Date event: {{ $item['date_event'] }}</p>
        <a href="/show/{{$item['id']}}" class="btn btn-primary">Go to events</a>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection