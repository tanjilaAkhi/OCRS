@extends('admin.master')

@section('content')

    <h1>Notice Table</h1>
    <a href="{{route('admin.notices.create')}}" class="btn btn-success">Create new Notice</a>

<!-- confirmation with sms   -->
@if(session('success'))
<div class="alert alert-success">
	{!! session('success')!!}
</div>
@endif

<!-- search er part -->
<form action="{{route('admin.notices')}}">
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
        <th scope="col">Date</th>
        <th scope="col">Notice</th>
        
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
      @foreach ($Notices as $key=>$Notice)
<tr>

           <td>{{$key+1}}</td>
           <td>{{$Notice->date}}</td>
           <td>{{$Notice->notice}}</td>
         
        <td ><a  class="btn btn-success"  href="{{route('admin.notices.edit',$Notice->id)}}" >Edit</a></td>
        <td ><a  onclick = "return confirm('Are You Sure?')" class="btn btn-success" href="{{route('admin.notices.delete',$Notice->id)}}">Delete</a></td>

</tr>
@endforeach
    </tbody>
</table>
@endsection
