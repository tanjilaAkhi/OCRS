@extends('admin.master')


@section('content')


<!-- validation confirmation sms -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- validation confirmation sms -->


    <h1>Create a Police Station</h1>
    
    <form action="{{route('admin.stations.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter DMP</label>
            <select name="dmp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
           
    <optgroup label="Dhaka Metro Politon(select accoriding to your area policestation)">
            <option>Ashulia (123456)</option>
            <option>Savar (122222)</option>
            <option>Turag (123333)</option>        
            <option>Banani (123433)</option>
            <option>Dhanmondi (123455)</option>
    </optgroup>
            </select> 

            
 
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Police Station</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter PoliceStation address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter T & T Number</label>
            <input name="telephone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Name</label>
            <input name="officername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Email</label>
            <input name="officeremail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Oficer Phone</label>
            <input name="officerphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>

@endsection
