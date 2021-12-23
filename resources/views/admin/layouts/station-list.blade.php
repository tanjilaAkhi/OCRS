@extends('admin.master')

@section('content')





    <h1>Police Station list</h1>
    <a href="{{route('admin.stations.create')}}" class="btn btn-success">Create new Police Station</a>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">DMP</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Telephone</th>
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $key=>$policestation) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$policestation->dmp}}   {{$policestation->id}}</td>
        <td>{{$policestation->name}}</td>
        <td>{{$policestation->address}}</td>
        <td>{{$policestation->telephone}}</td>
        <td>{{$policestation->cell}}</td>
        <td>{{$policestation->email}}</td>
        <td ><a class="btn btn-success" href="{{route('admin.station.details',$policestation->id)}}" >View</a></td>
        <td ><a class="btn btn-success" href="{{route('admin.station.edit',$policestation->id)}}" >Edit</a></td>
        <td ><a class="btn btn-success" href="{{route('admin.station.delete',$policestation->id)}}" >Delete</a></td>
       
        
    </tr>
    @endforeach
    <!--end data retrive-->
    
    </tbody>
</table>
@endsection
