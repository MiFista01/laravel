@extends('layouts.appMain')
@section('content')
<div class="show">
    <div class="card" style="width: 60%; margin: auto">
        <div class="row">
            <div class="col-md-3 showImg">
                <img src="../images/{{ $event['image'] }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{$event['title']}}</h1>
                    <h3>Description:</h3>
                    <p class="card-text fs-2">{{$event['description']}}</p>
                    <p class="card-text"><span> Data event: </span>{{$event['date_event']}}</p>
                    <p class="card-text"><span> Address: </span>{{$event['adress']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around" style="width: 30%; margin: auto; margin-top: 20px">
        <a href="/events">EventsList</a>
        <a href="/">Registration of event</a>
    </div>
</div>

@endsection
