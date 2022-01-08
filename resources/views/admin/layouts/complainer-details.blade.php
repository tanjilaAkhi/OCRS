@extends('admin.master')


@section('content')
    <h1>Complainer Details</h1>

    
<p>Issue Date : {{$list-> date}}</p>
<p>Issue Time: {{$list->time}}</p>
<p>Complainer Name: {{$list->cname}}</p>
<p>Complainer Address : {{$list-> c_address}}</p>
<p>Complainer Phone : {{$list-> cell}}</p>
<p>Complainer Email : {{$list-> email}}</p>
<p>Complaint Type: {{$list->casetype}}</p>
<p>Complaint Details: {{$list->details}}</p>
<p>Defendant Name: {{$list->dname}}</p>
<p>Defendant Address: {{$list->address}}</p>
<p>Crime Place Photo: {{$list->photo}}</p>
<p>Police Station Name: {{$list->policestation}}</p>
<p>Issused at: {{$list->issued_at}}</p>



    

@endsection

