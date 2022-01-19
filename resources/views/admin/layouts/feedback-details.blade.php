@extends('admin.master')


@section('content')
    <h1>Complainer Feedback Details</h1>

    
<p>NID Number: {{$Feedback->nid_no}}</p>
<p>Name: {{$Feedback->name}}</p>
<p>Cell: {{$Feedback->cell}}</p>
<p>Email: {{$Feedback->email}}</p>
<p>Address: {{$Feedback->address}}</p>
<p>Defandant Name: {{$Feedback->dname}}</p>
<p>Case Type: {{$Feedback->casetype}}</p>
<p>Feedback: {{$Feedback->feedback}}</p>


    

@endsection