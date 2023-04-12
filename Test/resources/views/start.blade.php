@extends('layouts.appLogin')

@section('content')
<hr>
<div class="login_wrapper">
    <div class="animate form login_from">
        <section class="login_content">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session()->get('error')}}
                </div>
            @endif
            <p class="login-box-msg">Sign in to start your dashboard</p>
            <form action="{{url('login')}}" method="POST">
                @csrf
                <h1>Login form</h1>
                <div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required autofocus />
                </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit" name="login"><i class="fa fa-sign-in"></i>Log in</button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">
                        <a href="/register" class="to_register">Create Account</a>
                    </p>
                    <div class="clearfix"></div>
                    <br>
                    <div>
                        <h1><i class="fa fa-cubes"></i>Login form</h1>
                        <p>&copy; 2023 IVKHK</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection