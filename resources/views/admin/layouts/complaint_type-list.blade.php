@extends('admin.master')

@section('content')

<!--jokhon requirement onojaye data dibo na-->
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!--end error sms section-->


<h1>Complaint Type list</h1>
<a href="{{route('admin.complaint_types.create')}}" class="btn btn-success">Create new Complaint Type</a>

<!-- search er part -->
<form action="{{route('admin.complaint_types')}}">
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
        <th scope="col">Case Number</th>
        <th scope="col">Case Type</th>
        <!-- <th scope="col">Case Details</th> -->
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($types as $key=>$complainttype )
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$complainttype->casenumber}}</td>
        <td>{{$complainttype->casetype}}</td>
        <!-- <td>{{$complainttype->casedetails}}</td> -->
        <td ><a href="{{route('admin.complaint_types.details',$complainttype->id)}}" class="btn btn-success">View</a></td>
        <td ><a href="{{route('admin.complaint_types.edit',$complainttype->id)}}" class="btn btn-success">Edit</a></td>
        <td ><a onclick = "return confirm('Are You Sure?')" href="{{route('admin.complaint_types.delete',$complainttype->id)}}" class="btn btn-success">Delete</a></td>
        
    </tr>
    @endforeach
        
    </tbody>
</table>
@endsection
