@extends('admin.master')


@section('content')
    <h1>National Identification Card Details</h1>

    
<p>NID Number: {{$Nid->nid_no}}</p>
<p>Name: {{$Nid->name}}</p>
<p>Father's Name: {{$Nid->fname}}</p>
<p>Mother's Name: {{$Nid->mname}}</p>
<p>Cell: {{$Nid->cell}}</p>
<p>Email: {{$Nid->email}}</p>
<p>Date of Birth: {{$Nid->birthdate}}</p>
<p>Address: {{$Nid->address}}</p>

    

@endsection