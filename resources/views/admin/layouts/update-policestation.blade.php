@extends('admin.master')


@section('content')

<h1>Create new Police Station</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.station.update',$policestation->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter DMP</label>
            <input value="{{$policestation->dmp}}" name="dmp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Police Station</label>
            <input value="{{$policestation->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter PoliceStation address</label>
            <input value="{{$policestation->address}}" name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter T & T Number</label>
            <input value="{{$policestation->telephone}}" name="telephone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input value="{{$policestation->cell}}" name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$policestation->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Name</label>
            <input  value="{{$policestation->officername}}" name="officername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Email</label>
            <input value="{{$policestation->officeremail}}"  name="officeremail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Oficer Phone</label>
            <input  value="{{$policestation->officerphone}}" name="officerphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

    
    <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
