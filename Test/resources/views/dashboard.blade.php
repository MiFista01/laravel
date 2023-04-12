@extends('layouts.app')

@section('content')
<div class="x_title">
    <h3>Dashboard Start page</h3>
    <div class="clearfix"></div>
</div>

<div class="x_content">
    <div class="demo-container" style="height: 250px;">
        <h4>Wlcome Admin panel</h4>
        <div>
            @can('isAdmin')
            <div class="btn btn-success btn-lg">
                You have Admin access
            </div>
            @elsecan('isManager')
            <div class="btn btn-primary btn-lg">
                You have Manager access
            </div>
            @elsecan('isUser')
            <div class="btn btn-danger btn-lg">
                You have User access
            </div>
            @else
            <div class="btn btn-warning btn-lg">
                You have not access
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection