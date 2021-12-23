@extends('admin.master')

@section('content')

    <h1>NID Information Table</h1>
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
    
    @foreach($nids as $key=>$Nid) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$Nid->nid_no}}</td>
        <td>{{$Nid->name}}</td>
        <td>{{$Nid->fname}}</td>
        <td>{{$Nid->mname}}</td>
        <td>{{$Nid->cell}}</td>
        <td>{{$Nid->email}}</td>
        <td>{{$Nid->birthday}}</td>
        <td>{{$Nid->address}}</td>
        <td ><a href="#" class="btn btn-success">View</a></td>
        <td ><a href="#" class="btn btn-success">Edit</a></td>
        <td ><a href="#" class="btn btn-success">Delete</a></td>
       
        
    </tr>
    @endforeach
    <!--end data retrive-->
    </tbody>
</table>
@endsection
