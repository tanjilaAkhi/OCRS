@extends('admin.master')

@section('content')

    <h1>Complainer list</h1>

<!-- search er part -->
<form action="{{route('admin.complainers')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NID Number</th>
        <th scope="col">Issue Date</th>
        <!-- <th scope="col">Issue Time</th> -->
        <th scope="col">Complainer Name</th>
        <!-- <th scope="col">Complainer Address</th> -->
        <th scope="col">Complainer Phone</th>
        <!-- <th scope="col">Complainer Email</th> -->
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Defendent Name</th>
        <!-- <th scope="col">Defendent Address</th> -->
        <th scope="col">Crime Place Photo</th>
        <th scope="col">Police Station Name</th>
        <th scope="col">Issused at</th>
        <th scope="col">Responsible Officer Name</th>
        <!-- <th scope="col">Selected Officer Email</th>
        <th scope="col">Selected Officer Phone</th> -->
        <th scope="col">Action</th>
     
        
    </tr>
    </thead>
    <tbody>
    
    @foreach($lists as $key=>$list) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->nid_no}}</td>
        <td>{{$list->date}}</td>
        <!-- <td>{{$list->time}}</td> -->
        <td>{{$list->cname}}</td>
        <!-- <td>{{$list->c_address}}</td> -->
        <td>{{$list->cell}}</td>
        <!-- <td>{{$list->email}}</td> -->
        <td>{{$list->casetype}}</td>
        <td>{{$list->details}}</td>
        <td>{{$list->dname}}</td>
        <!-- <td>{{$list->address}}</td> -->
        <td>
            <img src="{{url('/uploads/'.$list->image)}}" width="100px" alt="image">
        </td>

        <td>{{$list->policestation}}</td>
        <td>{{$list->issued_at}}</td>
        <td>{{$list->officername}}</td>
        <!-- <td>{{$list->officeremail}}</td>
        <td>{{$list->officerphone}}</td> -->
        <td ><a  class="btn btn-success" href="{{route('admin.complainer.details', $list->id)}}">View</a></td>
        <td ><a onclick = "return confirm('Are You Sure?')" class="btn btn-success" href="{{route('admin.complainer.delete', $list->id)}}">Delete</a></td>
       
        
    </tr>
    @endforeach

    </tbody>
</table>
@endsection
