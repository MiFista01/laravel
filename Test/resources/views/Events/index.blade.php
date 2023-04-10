@extends('layouts.app')
@section('content')
    <div class="x_title">
        <h2>Events manage</h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <div class="demo-container" style="height:250px">
            <a href="addevent" class="btn btn-primary btn-sm btn-flat">
            <i class="fa fa-plus"></i> New</a>
            @if (count($events ?? "") > 0)
            <table id="datatable" class="table table-striped table-bordered" >
                <thead>
                <tr>
                    <th width = "10%">NN</th>
                    <th width = "20%">Title</th>
                    <th width = "10%">Date</th>
                    <th width = "50%">Location</th>
                    <th width = "10%">Action</th>
                </tr>
                </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event -> id }}</td>
                            <td>{{ $event -> title }}</td>
                            <td>{{ $event -> date_event }}</td>
                            <td>{{ $event -> description }}</td>
                            <td>
                            <form action="{{ url('eventlist/'.$event -> id) }}" method="POST"></form>
                            {{-- <button class='btn btn-success btn-sm edit btn-flat'> --}}
                            <a href="{{ url('editevent/'.$event -> id) }}" title="edit"><i class='fa fa-edit'></i></a>
                            @csrf
                            {{method_field('DELETE')}}
                            <button class='btn btn-danger btn-sm delete btn-flat' onclick="return confirm('Are you sure?')"><i class='fa fa-trash'></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Data not found</p>
            @endif

        </div>
    </div>
@endsection

