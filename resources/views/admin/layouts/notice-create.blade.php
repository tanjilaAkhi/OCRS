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

    <h1>Create New Notice</h1>
    
    <form action="{{route('admin.notices.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Date</label>
            <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Notice</label>
            <input name="notice" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        
        
        
        

        <button type="submit" class="btn btn-primary">Send Notice</button>
        
        
    </form>

@endsection
