@extends('admin.master')


@section('content')


@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <h1>Make a complaint</h1>
    
    <form action="{{route('user.form.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Enter Issue Date</label>
            <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Issue Time</label>
            <input name="time" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Name </label>
            <input name="cname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Address</label>
            <input name="c_address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Phone</label>
            <input name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <select name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
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
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Description</label>
            <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Defendant Name</label>
            <input name="dname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Defendant Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Crime place Photo</label>
            <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>

@endsection
