@extends('layouts.appMain')
@section('content')
<div class="show">
    <div class="card" style="width: 60%; margin: auto">
        <div class="row">
            <div class="col-md-5 showImg">
                <img src="../images/{{ $event['image'] }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h1 class="card-title">{{$event['title']}}</h1>
                    <p class="card-text"><span> Data event: </span>{{$event['date_event']}}</p>
                    <p class="card-text"><span> Address: </span>{{$event['adress']}}</p>
                    <h3>Description:</h3>
                    <p class="card-text fs-2">{{$event['description']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around" style="width: 30%; margin: auto; margin-top: 20px">
        <a href="/events">EventsList</a>
        <a href="/">Home</a>
        <a href="/regevent/{{ $event['id'] }}">Registration of event</a>
    </div>
</div>

@endsection
