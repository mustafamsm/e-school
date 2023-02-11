@extends('layouts.dashboard')
@section('title', ' Create Sections')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Section</li>
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
    <form action="{{ route('dashboard.sections.store') }}" method="post">

        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="form-group mb-3">
                    <label for="name">Secation Name</label>
                    <input type="text " id="name" name="name" class="form-control" value="{{ old('name') }}">

                </div>

                <div class="form-group mb-3">
                    <label for="grade_id">Grade</label>
                    <select name="grade_id" class="form-control form-select">
                        <option value=""></option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}"  >{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>


                    <div class="form-group mb-3">
                        <label for="classroom_id">Classroom</label>
                        <select name="classroom_id" class="custom-select">
        
                        </select>
                    </div>
                 
            </div>

        </div>
        <div class="col md-12">
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="/dashboard/sections" class="btn btn-light">Cancel</a>
            </div>
        </div>
      
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.3.slim.js"
    integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('select[name="grade_id"]').on('change', function() {
            var grade_id = $(this).val();
            console.log('h');
            if (grade_id) {
                $.ajax({
                    url: "{{ URL::to('dashboard/classes') }}/" + grade_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $('select[name="classroom_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="classroom_id"]').append(
                                '<option value="' + key + '">' + value +
                                '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
