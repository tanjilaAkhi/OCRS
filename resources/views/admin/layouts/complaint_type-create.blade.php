@extends('admin.master')


@section('content')

    <h1>Create Complaint Type</h1>
    
    <form action="{{route('admin.complaint_types.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Number</label>
            <input name="casenumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <select name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <input name="casedetails" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>

@endsection
