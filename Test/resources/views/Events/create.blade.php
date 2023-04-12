@extends('layouts.app')

@section('content')
    <div class="x_title">
        <h2>Events manage - Create event</h2>
        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <div class="demo-container" style="min-height: 205px;">
            <a href="eventlist" class="btn btn-primery btn-sm btn-flat">
                <i class="fa fa-backward"></i> Back to list
            </a>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>$error</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('addevent')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" class="form-control" placeholder="Title" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date event</strong>
                        <input type="date" name="date_event" class="form-control" placeholder="Date event" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Adress</strong>
                        <input type="text" name="adress" class="form-control" placeholder="Adress" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea class="form-control" name="description" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="file" name="image" class="form-control" value="" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Save event</button>
                </div>
            </form>
        </div>
    </div>
@endsection