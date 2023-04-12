@extends('layouts.app')

@section('content')
<div class="box-headr with-border">
    <h3 class="box-title"><strong>Users Manage</strong></h3>
    <div class="add">
        <a href="adduser" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-plus"></i>New user
        </a>
    </div>
    <div class="pull-right">
        <form class="form-inline" action="{{url('usersByRole')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Role: </label>
                <select class="form-control input-sm" name="role" onchange="submit();">
                    <option value="0">All</option>
                    @foreach ($roles as $role)
                    <option value="{{$role}}"
                        @if (isset($selectedRole) && $role == $selectedRole)
                            selected
                        @endif
                        >{{$role}}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
    <div class="x_content">
        <div class="demo-container" style="min-height: 205px;">
            @if (count($users ?? '') > 0)
                <table class="table table-stipped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td class="d-flex justify-content-center">
                                    <form action="{{url('users/'.$user->id)}}" method="POST">
                                        <a href="{{url('edituser/'.$user->id)}}" title="edit">
                                            <i class="fa fa-btn fa-edit"></i>
                                        </a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-link">
                                            <i class="fa fa-btn fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No data</p>
            @endif
        </div>
    </div>
</div>
@endsection