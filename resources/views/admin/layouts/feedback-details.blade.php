@extends('admin.master')


@section('content')
    <h1>Complainer Feedback Details</h1>

    
<p>Email: {{$Feedback->email}}</p>
<p>Name: {{$Feedback->name}}</p>
<p>Case Type: {{$Feedback->casetype}}</p>
<p>Police Station: {{$Feedback->policestation}}</p>
<p>Responsible Officer Name: {{$Feedback->officername}}</p>
<p>Feedback: {{$Feedback->feedback}}</p>


    

@endsection