@extends('admin.master')


@section('content')
    <h1>Complaints Type Details</h1>

    
<p>Complaint Number : {{$complainttype-> casenumber}}</p>
<p>Complaint Type: {{$complainttype->casetype}}</p>
<p>Complaint Details: {{$complainttype->casedetails}}</p>


    

@endsection
