@extends('admin.master')

@section('content')

    <h1>Police Station list</h1>
    <a href="{{route('admin.nids.create')}}" class="btn btn-success">Create new NID</a>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NID No</th>
        <th scope="col">Name</th>
        <th scope="col">Father's Name</th>
        <th scope="col">Mother's Name</th>
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    
    </tbody>
</table>
@endsection
