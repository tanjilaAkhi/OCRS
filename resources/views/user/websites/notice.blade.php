
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

<h1 style="text-align:center;"><b>NOTICE BOARD</b></h1>

<br>

<table>
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">DATE</th>
        <th scope="col">NOTICE</th>
        
        
    </tr>
    </thead>
    <tbody>
    @foreach ($Notices as $key=>$Notice)
<tr>

           <td>{{$key+1}}</td>
           <td>{{$Notice->date}}</td>
           <td>{{$Notice->notice}}</td>
         
@endforeach

</tbody>
  
  
  
</table>

</body>
</html>

