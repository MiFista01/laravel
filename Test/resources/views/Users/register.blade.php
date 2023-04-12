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
            @include('common.errors')
            <p class="login-box-msg">Signup to join out community</p>
            <form action="{{url('register')}}" method="POST">
                @csrf
                <h1>Register form</h1>
                <div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required autofocus />
                </div>
                <div>
                    <input type="text" class="form-control" name="name" placeholder="Name" required />
                </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                </div>
                <div>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required />
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit" name="register"><i class="fa fa-sign-in"></i>Signup</button>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">
                        <a href="/" class="to_register">Sign in</a>
                    </p>
                    <div class="clearfix"></div>
                    <br>
                    <div>
                        <h1><i class="fa fa-cubes"></i>Register form</h1>
                        <p>&copy; 2023 IVKHK</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection