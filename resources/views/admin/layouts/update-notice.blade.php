@extends('admin.master')


@section('content')

<h1>Create new Police Station</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.notices.update',$Notice->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Date</label>
            <input value="{{$Notice->date}}" name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Notice</label>
            <input value="{{$Notice->notice}}" name="notice" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        
        
        
        <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection

