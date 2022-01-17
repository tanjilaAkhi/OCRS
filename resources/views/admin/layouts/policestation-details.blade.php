@extends('admin.master')


@section('content')
    <h1>Police Station Details</h1>

    
<p>Police Station DMP: {{$policestation->dmp}}</p>
<p>Police Station Name: {{$policestation->name}}</p>
<p>Police Station Address: {{$policestation->address}}</p>
<p>Police Station Telephone: {{$policestation->telephone}}</p>
<p>Police Station Cell: {{$policestation->cell}}</p>
<p>Police Station Email: {{$policestation->email}}</p>
<p>Police Station Officer Name: {{$policestation->officername}}</p>
<p>Police Station Officer Email: {{$policestation->officeremail}}</p>
<p>Police Station Officer Phone: {{$policestation->officerphone}}</p>

    

@endsection
