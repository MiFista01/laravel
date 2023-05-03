@extends('layouts.appMain')
@section('content')
<div class="row">
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
  </div>

  <div class="bd-example">
    <form class="">
      
      <div class="mb-3">
        <label for="validationTooltip01">Email</label>
        <div class="input-group">
          <input type="text" class="form-control" aria-describedby="validatedInputGroupPrepend" required>
          <div class="input-group-append">
            <label class="input-group-text" for="validatedInputGroupSelect">@</label>
          </div>
        </div>
        
      </div>
    
    </form>
  </div>
</div>
@endsection