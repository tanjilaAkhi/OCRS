@extends('admin.master')

@section('content')

    <h1>Feedback Table</h1>
    <a href="{{route('admin.feedbacks.create')}}" class="btn btn-success">Create new Feedback</a>

<!-- confirmation with sms   -->
@if(session('success'))
<div class="alert alert-success">
	{!! session('success')!!}
</div>
@endif


    <!-- search er part -->
<form action="{{route('admin.feedbacks')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Case Type</th>
        <th scope="col">Police Station</th>
        <th scope="col">Responsible Officer Name</th>
        <th scope="col">Feedback</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($Feedbacks as $key=>$Feedback )
    
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$Feedback->email}}</td>
        <td>{{$Feedback->name}}</td>
        <td>{{$Feedback->casetype}}</td>
        <td>{{$Feedback->policestation}}</td>
        <td>{{$Feedback->officername}}</td>
        <td>{{$Feedback->feedback}}</td>
        
        <td ><a  class="btn btn-success" href="{{route('admin.feedback.details',$Feedback->id)}}">View</a></td>
        <td ><a  class="btn btn-success"  href="{{route('admin.feedback.edit',$Feedback->id)}}" >Edit</a></td>
        <td ><a  onclick = "return confirm('Are You Sure?')" class="btn btn-success" href="{{route('admin.feedback.delete',$Feedback->id)}}">Delete</a></td>
       
        
    </tr>
    @endforeach 
    
    </tbody>
</table>
@endsection
