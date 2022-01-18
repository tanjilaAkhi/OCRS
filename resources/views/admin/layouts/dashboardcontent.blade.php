@extends('admin.master')

@section('content')

    <h1>Monitoring Activities</h1>
    

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Complaint Date</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Case Type</th>
        <th scope="col">Police Station Name</th>
        <th scope="col">Responsible Officer</th>
        <th scope="col">Selected Officer's  Email</th>
        <th scope="col">Selected Officer's Phone Number</th>
        <th scope="col">Case Status</th>
        <th scope="col">Action</th>
        
        
    </tr>
    </thead>
    <tbody>
    @foreach($monitors as $key=>$monitor) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$monitor->date}}</td>
        <td>{{$monitor->cname}}</td>
        <td>{{$monitor->casetype}}</td>
        <td>{{$monitor->policestation}}</td>
        <td>{{$monitor->officername}}</td>
        <td>{{$monitor->officeremail}}</td>
        <td>{{$monitor->officerphone}}</td>
        <td>{{$monitor->case_status}}</td>
        <td ><a  class="btn btn-success" href="{{route('user.form.status.solved',$monitor->id)}}">Solved</a></td>
        <td ><a  class="btn btn-success" href="{{route('admin.info.delete',$monitor->id)}}">Delete</a></td>
        
    </tr>
    @endforeach
    
    </tbody>
</table>
@endsection