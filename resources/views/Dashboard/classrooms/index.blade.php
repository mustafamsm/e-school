@extends('layouts.dashboard')
@section('title', 'Classrooms')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">ClassRooms</li>
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-toolbar mb-3">

        <a href="{{ route('dashboard.classrooms.create') }}" class="btn btn-sm btn-outline-primary">New</a>
    </div>

    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Grade</th>
                    <th>Created At</th>
                    <th  colspan="2">Actions</th>

            </thead>
            <tbody>
                @foreach ($classrooms as $classroom)
                    <tr>
                        <td></td>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td>{{ $classroom->grade->name }}</td>
                        <td>{{ $classroom->created_at }}</td>
                        <td>
                            <a href="{{route('dashboard.classrooms.edit',$classroom->id)}}" class="btn btn-block btn-info ">edit</a>
                        </td>
                        <td>
                            <form action="{{route('dashboard.classrooms.destroy',$classroom->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block  btn-danger">Delete</button>

                            </form>
                         </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
