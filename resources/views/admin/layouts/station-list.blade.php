@extends('admin.master')

@section('content')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>Police Station list</h1>
    <a href="{{route('admin.stations.create')}}" class="btn btn-success">Create new Police Station</a>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">DMP</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Telephone</th>
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($lists as $key=>$policestation) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$policestation->dmp}}</td>
        <td>{{$policestation->name}}</td>
        <td>{{$policestation->address}}</td>
        <td>{{$policestation->telephone}}</td>
        <td>{{$policestation->cell}}</td>
        <td>{{$policestation->email}}</td>
        <td ><a href="#" class="btn btn-success">Edit</a></td>
       
        
    </tr>
    @endforeach
    <!--end data retrive-->
    
    </tbody>
</table>
@endsection
