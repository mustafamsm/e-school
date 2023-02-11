@extends('layouts.dashboard')
@section('title', 'Section')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Section</li>
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-toolbar mb-3">

        <a href="{{ route('dashboard.sections.create') }}" class="btn btn-sm btn-outline-primary">New</a>
    </div>

    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Classroom</th>
                    <th>Grade</th>
                    <th>Created At</th>
                    <th  colspan="2">Actions</th>

            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <td></td>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->name }}</td>
                        <td>{{ $section->classroom->name }}</td>
                        <td>{{ $section->grade->name }}</td>

                        <td>{{ $section->created_at }}</td>
                        <td>
                            <a href="{{route('dashboard.sections.edit',$section->id)}}" class="btn btn-block btn-info ">edit</a>
                        </td>
                        <td>
                            <form action="{{route('dashboard.sections.destroy',$section->id)}}" method="post">
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