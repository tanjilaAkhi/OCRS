@extends('admin.master')


@section('content')

<h1>Create new Police Station</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.nid.update',$Nid->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter NID No</label>
            <input value="{{$Nid->nid_no}}" name="nid_no" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input value="{{$Nid->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Father's Name</label>
            <input value="{{$Nid->fname}}" name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Mother's Name</label>
            <input value="{{$Nid->mname}}" name="mname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input value="{{$Nid->cell}}" name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input value="{{$Nid->email}}" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Birth Date</label>
            <input value="{{$Nid->birthdate}}" name="birthdate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Address</label>
            <input value="{{$Nid->address}}" name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
