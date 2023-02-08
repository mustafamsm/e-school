@extends('layouts.dashboard');
@section('title','create category');
@section('breadcrumb')
@parent
<li class="breadcrumb-item active">categories</li>
<li class="breadcrumb-item active">create</li>

@endsection
@section('content')
<form action="{{route('dashboard.categories.store')}}" method="post">
{{--
    <input type="hidden " name="_token" value="{{csrf_token()}}">
{{csrf field()}}
--}}
@csrf


<div class="row">
    <div class="col-md-8">
    <div class="form-group mb-3">
<label for="name">Category Name</label>
<input type="text " id="name" name="name" class="form-control">
</div>
<div class="form- group mb-3">
<label for="parent_id">Category Parent</label>
<select id= "parent_id" name="parent_id" class="form-control">
<option value="">No Parent</option>
</select>
</div>
<div class="form-group mb-3">
<label for="description">Description</label>
<textarea id="description" name="description" class="form-control"></textarea>
</div>
    </div>
    <div class="col md-4">
    <div class="form-group mb-3">
<label for="image">Thumbnail</label>
<input type="file" id="image" name="image" class="form-control">
</div>
    </div>
</div>
<div class="col md-12">
<div class="form-group mb-3">
<button type="submit"  class="btn btn-primary">Add</button>
<a href="/dashboard/categories" class="btn btn-light">Cancel</a>
</div>
</div>

</form>
@endsection
