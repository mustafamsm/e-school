@extends('layouts.dashboard')
@section('title', $grade->name)

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Grade</li>
    <li class="breadcrumb-item active">{{ $grade->name }}</li>
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
    <form action="{{ route('dashboard.grades.update',$grade->id) }}" method="post">
        @method('put')
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="form-group mb-3">
                    <label for="name">Grade Name</label>
                    <input type="text " id="name" name="name" class="form-control" value="{{$grade->name}}">

                </div>

                <div class="form-group mb-3">
                    <label for="notes">Notes</label>
                    <textarea id="notes"  name="Notes" class="form-control">{{$grade->Notes}}</textarea>
                </div>
            </div>

        </div>
        <div class="col md-12">
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/dashboard/grades" class="btn btn-light">Cancel</a>
            </div>
        </div>

    </form>
@endsection
