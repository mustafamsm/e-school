@extends('layouts.dashboard')
@section('title', 'edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Grade</li>
    <li class="breadcrumb-item active"> </li>
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Error Occured!</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif
    <form action="{{ route('dashboard.classrooms.update',$classroom->id) }}" method="post">
        @method('put')
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="form-group mb-3">
                    <label for="name">Classroom Name</label>
                    <input type="text " id="name" name="name" class="form-control" value="{{$classroom->name}}">

                </div>

                <div class="form-group mb-3">
                    <label for="">Grade</label>
                    <select name="grade_id" class="form-control form-select">
                        @foreach ($grades as $grade)
                        <option value="{{$grade->id}}"    @if($classroom->grade_id==$grade->id) selected @endif>{{$grade->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="col md-12">
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="/dashboard/grades" class="btn btn-light">Cancel</a>
            </div>
        </div>

    </form>
@endsection
