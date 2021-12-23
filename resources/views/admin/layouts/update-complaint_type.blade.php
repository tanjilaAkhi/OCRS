@extends('admin.master')


@section('content')

<h1>Create new Police Station</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.complaint_types.update',$complainttype->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Number</label>
            <input value="{{$complainttype->casenumber}}" name="casenumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <select value="{{$complainttype->casetype}}" name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
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
            <label for="exampleInputEmail1" class="form-label">Enter Case Details</label>
            <input value="{{$complainttype->casedetails}}" name="casedetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        
       

    
    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
