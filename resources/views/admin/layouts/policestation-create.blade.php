@extends('admin.master')


@section('content')

    <h1>Create a Police Station</h1>
    
    <form action="{{route('admin.stations.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter DMP</label>
            <input name="dmp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Police Station</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter PoliceStation address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter T & T Number</label>
            <input name="telephone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Cell Number</label>
            <input name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
        
        
    </form>

@endsection
