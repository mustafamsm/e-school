@extends('layouts.dashboard');
@section('title',$title);
@section('breadcrumb')
@parent
<li class="breadcrumb-item active">categories</li>
@endsection
@section('content')
<div class="table-toolbar mb-3">

<a href="{{route('dashboard.categories.create')}}" class="btn btn-sm btn-outline-primary">New</a>
</div>

<div class="table-responsive">
  
<table class="table">
<thead>
<tr>
<th></th>
<th>ID</th>
<th>NAME</th>
<th>Parent</th>
<th>Created At</th>
<th>Actions</th>

</thead>
<tbody>
    @foreach($entries as $entry)
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection