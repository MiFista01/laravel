@extends('layouts.app')

@section('content')
<div class="x_title">
    <h2>Users manage - Create user</h2>
    <div class="clearfix"></div>
</div>

<div class="x_content">
    <div class="demo-container" style="min-height: 205px;">
        <a href="users" class="btn btn-primery btn-sm btn-flat">
            <i class="fa fa-backward"></i> Back to list
        </a>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('adduser')}}" method="POST">
            {{csrf_field()}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm password</strong>
                    <input type="password" name="password_confirmation" class="form-control" placehlder="Confirm password" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <strong>Role</strong>
                <select class="form-control" name="role">
                    @foreach ($roles as $role)
                    <option value="{{$role}}">{{$role}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Save user</button>
            </div>
        </form>
    </div>
</div>
@endsection