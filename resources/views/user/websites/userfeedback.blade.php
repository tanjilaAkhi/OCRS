
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1 style="text-align:center;"><b>Your Case Feedback</b></h1>
<h3 style="text-align:center;"><b>Get Your Feedback Using your Provided Email</b></h3>
<!-- search er part -->
<form action="{{route('user.feedback')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline" style="margin-left:75%; ">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search feedback by mail" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->

  <button type="submit" class="btn btn-primary">Search</button>
    <i class="fas fa-search"></i>
  </button>
</div>
</div>
</form>
<br>
<br>
<table>
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Complainer Name</th>
        <th scope="col">Case Type</th>
        <th scope="col">Police Station</th>
        <th scope="col">Responsible Officer Name</th>
        <th scope="col">Feedback</th>
        <!-- <th>Action</th> -->
        
    </tr>
    </thead>
    <tbody>
    @foreach($reviews as $key=>$review) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$review->email}}</td>
        <td>{{$review->name}}</td>
        <td>{{$review->casetype}}</td>
        <td>{{$review->policestation}}</td>
        <td>{{$review->officername}}</td>
        <td>{{$review->feedback}}</td>
        
        <!-- <td ><button  class="btn btn-success"><a onclick = "return confirm('Are You Sure?')"  href="{{route('admin.feedback.delete',$review->id)}}" >Delete</a></button></td> -->
        
    </tr>
    @endforeach

</tbody>
  
  
  
</table>

</body>
</html>

