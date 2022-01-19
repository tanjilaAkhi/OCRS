
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

<table>
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NID No</th>
        <th scope="col">Name</th>
        <th scope="col">Cell</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Defandent Name</th>
        <th scope="col">Case Type</th>
        <th scope="col">Feedback</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($reviews as $key=>$review) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$review->nid_no}}</td>
        <td>{{$review->name}}</td>
        <td>{{$review->cell}}</td>
        <td>{{$review->email}}</td>
        <td>{{$review->address}}</td>
        <td>{{$review->dname}}</td>
        <td>{{$review->casetype}}</td>
        <td>{{$review->feedback}}</td>
        
        <td ><button  class="btn btn-success"><a onclick = "return confirm('Are You Sure?')"  href="{{route('admin.feedback.delete',$review->id)}}" >Delete</a></button></td>
        
    </tr>
    @endforeach

</tbody>
  
  
  
</table>

</body>
</html>

