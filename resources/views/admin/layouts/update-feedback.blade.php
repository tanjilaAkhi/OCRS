@extends('admin.master')


@section('content')

<h1>Create new Police Station</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.feedback.update',$Feedback->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter NID No</label>
            <input value="{{$Feedback->nid_no}}" name="nid_no" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input value="{{$Feedback->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input value="{{$Feedback->cell}}" name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$Feedback->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Address</label>
            <input value="{{$Feedback->address}}" name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Defandant Name</label>
            <input value="{{$Feedback->dname}}" name="dname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <select value="{{$Feedback->casetype}}" name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            <option>General Dairy(GD)</option>
           
    <optgroup label="Criminal Case(select any on them)">
            <option>Murder</option>
            <option>Acid Offences</option>
            <option>Violence Against Women and Children</option>        
            <option>Rape</option>
            <option>Kidnapping</option>
            <option>Eveteasing</option>
            <option>Defamation</option>        
            <option>Cheating</option>
            <option>Drug</option>
            <option>Robbery</option>
    </optgroup>
            </select> 

            
 
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Feedback</label>
            <input value="{{$Feedback->feedback}}" name="feedback" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection

