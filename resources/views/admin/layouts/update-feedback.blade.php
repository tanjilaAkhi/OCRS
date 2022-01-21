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
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$Feedback->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Name</label>
            <input value="{{$Feedback->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <input value="{{$Feedback->casetype}}" name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            
</input> 

            
 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Police Station</label>
            <input value="{{$Feedback->policestation}}" name="policestation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        
</input>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Responsible Officer Name</label>
            <input value="{{$Feedback->officername}}" name="officername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            
</input> 


        </div>
        
        
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Feedback</label>
            <input value="{{$Feedback->feedback}}" name="feedback" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection

