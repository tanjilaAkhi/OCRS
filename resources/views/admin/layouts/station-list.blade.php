@extends('admin.master')

@section('content')





    <h1>Police Station list</h1>
    <a href="{{route('admin.stations.create')}}" class="btn btn-success">Create new Police Station</a>

<!-- search er part -->
<form action="{{route('admin.stations')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>
<!-- end search part -->

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">DMP</th>
        <th scope="col">Name</th>
        <!-- <th scope="col">Address</th> -->
        <!-- <th scope="col">Telephone</th> -->
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th scope="col">Officer's Name</th>
        <!-- <th scope="col">Officer's Email</th>
        <th scope="col">Officer's Phone</th> -->
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $key=>$policestation) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$policestation->dmp}} </td>     
        <td>{{$policestation->name}}</td>
        <!-- <td>{{$policestation->address}}</td>
        <td>{{$policestation->telephone}}</td> -->
        <td>{{$policestation->cell}}</td>
        <td>{{$policestation->email}}</td>
        <td>{{$policestation->officername}}</td>
        <!-- <td>{{$policestation->officeremail}}</td>
        <td>{{$policestation->officerphone}}</td> -->
        <td ><a class="btn btn-success" href="{{route('admin.station.details',$policestation->id)}}" >View</a></td>
        <td ><a class="btn btn-success" href="{{route('admin.station.edit',$policestation->id)}}" >Edit</a></td>
        <td ><a onclick = "return confirm('Are You Sure?')" class="btn btn-success" href="{{route('admin.station.delete',$policestation->id)}}" >Delete</a></td>
       
        
    </tr>
    @endforeach
    <!--end data retrive-->
    
    </tbody>
</table>
@endsection
