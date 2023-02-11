@extends('layouts.dashboard')
@section('title', 'Grades')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Grades</li>
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-toolbar mb-3">

        <a href="{{ route('dashboard.grades.create') }}" class="btn btn-sm btn-outline-primary">New</a>
    </div>

    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Notes</th>
                    <th>Created At</th>
                    <th  colspan="2">Actions</th>

            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr>
                        <td></td>
                        <td>{{ $grade->id }}</td>
                        <td>{{ $grade->name }}</td>
                        <td>{{ $grade->Notes }}</td>
                        <td>{{ $grade->created_at }}</td>
                        <td>
                            <a href="{{route('dashboard.grades.edit',$grade->id)}}" class="btn btn-block btn-info ">edit</a>
                        </td>
                        <td>
                            <form action="{{route('dashboard.grades.destroy',$grade->id)}}" method="post">
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
