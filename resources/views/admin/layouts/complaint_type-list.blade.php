@extends('admin.master')

@section('content')

<!--jokhon requirement onojaye data dibo na-->
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!--end error sms section-->


<h1>Complaint Type list</h1>
<a href="{{route('admin.complaint_types.create')}}" class="btn btn-success">Create new Complaint Type</a>


    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Case Number</th>
        <th scope="col">Case Type</th>
        <th scope="col">Case Details</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($types as $key=>$complainttype )
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$complainttype->casenumber}}</td>
        <td>{{$complainttype->casetype}}</td>
        <td>{{$complainttype->casedetails}}</td>
        <td ><a href="#" class="btn btn-success">View</a></td>
        <td ><a href="#" class="btn btn-success">Edit</a></td>
        <td ><a href="#" class="btn btn-success">Delete</a></td>
        
    </tr>
    @endforeach
        
    </tbody>
</table>
@endsection
