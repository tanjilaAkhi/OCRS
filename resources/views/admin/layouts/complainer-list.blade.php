@extends('admin.master')

@section('content')

    <h1>Complainer list</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Issue Time</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Complainer Address</th>
        <th scope="col">Complainer Phone</th>
        <th scope="col">Complainer Email</th>
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Defendent Name</th>
        <th scope="col">Defendent Address</th>
        <th scope="col">Crime Place Photo</th>
        <th scope="col">Police Station Name</th>
        <th scope="col">Issused at</th>
        <th scope="col">Action</th>
     
        
    </tr>
    </thead>
    <tbody>
    
    @foreach($lists as $key=>$list) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->date}}</td>
        <td>{{$list->time}}</td>
        <td>{{$list->date}}</td>
        <td>{{$list->cname}}</td>
        <td>{{$list->c_address}}</td>
        <td>{{$list->cell}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->casetype}}</td>
        <td>{{$list->details}}</td>
        <td>{{$list->dname}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->photo}}</td>
        <td>{{$list->policestation}}</td>
        <td>{{$list->issued_at}}</td>
        <td ><a  class="btn btn-success" href="">View</a></td>
        <td ><a  class="btn btn-success"  href="" >Edit</a></td>
        <td ><a  class="btn btn-success" href="">Delete</a></td>
       
        
    </tr>
    @endforeach

    </tbody>
</table>
@endsection
