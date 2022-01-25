
<!DOCTYPE html>
<html class=" sp-seedprod sp-h-full">
<head>
<meta charset="UTF-8">
<title>Confirmation Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" id="seedprod-css-css" href="https://assets.seedprod.com/tailwind.min.css" type="text/css" media="all" />
<link rel="stylesheet" id="seedprod-fontawesome-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap">



<style>

/* Style buttons */
.btn {
background-color: DodgerBlue;
border: none;
color: white;
padding: 12px 30px;
cursor: pointer;
font-size: 20px;
text-align: center; 
margin-left:45%;
margin-right:50%;


}

/* Darker background on mouse-over */
.btn:hover {
background-color: RoyalBlue;

}
.table{
  text-align: center;
}

#sp-page{color:#272343} #sp-page .sp-header-tag-h1,#sp-page .sp-header-tag-h2,#sp-page .sp-header-tag-h3,#sp-page .sp-header-tag-h4,#sp-page .sp-header-tag-h5,#sp-page .sp-header-tag-h6{color:#150F24}#sp-page h1,#sp-page h2,#sp-page h3,#sp-page h4,#sp-page h5,#sp-page h6{color:#150F24; font-family:'Source Sans Pro';font-weight:700;font-style:normal} #sp-page a{color:#00B881} #sp-page a:hover{color:#00855d}#sp-page .btn{background-color:#00B881}body{background-color:#F2F6ED; background-image:url('https://assets.seedprod.com/4837-ScpRUztNoKFlWxVB.png');}

    

@media only screen and (max-width: 480px) {  }
</style>
</head>




<body>
<div id="divToPrint">
<h1 style="text-align:center;">GOVERNMENT OF THE PEOPLES REPUBLIC OF BANGLADESH</h1>
    <h3 style="text-align:center;">COMPLAINER SUBMITTED INFORMATION COPY </h3>


    <br>
<br>
    

    <table class="table">
    <thead>
    
    <tr>
    <!-- <th scope="col">#</th> -->
        <th scope="col">NID Number</th>
        <th scope="col">Issue Date</th>
        <!-- <th scope="col">Issue Time</th> -->
        <th scope="col">Complainer Name</th>
        <!-- <th scope="col">Complainer Address</th> -->
        <!-- <th scope="col">Complainer Phone</th> -->
        <th scope="col">Complainer Email</th>
        <th scope="col">Complaint Type</th>
        <th scope="col">Complaint Details</th>
        <th scope="col">Defendent Name</th>
        <th scope="col">Defendent Address</th>
        <th scope="col">Crime Place Photo</th>
        <th scope="col">Police Station Name</th>
        <th scope="col">Issused at</th>
        <th scope="col">Officer Name</th>
        <th scope="col">Officer Phone</th>
        

       
        
    </tr>
    </thead>
    <tbody>
   
    
    @foreach($informations as $key=>$information) <!--data database theke table a show korer code (data retrive)--> 
    <tr>
        <!-- <th>{{$key+1}}</th> -->
        <td>{{$information->nid_no}} </td> 
        <td>{{$information->date}} </td>     
        <!-- <td>{{$information->time}}</td> -->
        <td>{{$information->cname}}</td>
        <!-- <td>{{$information->c_address}}</td> -->
        <!-- <td>{{$information->cell}}</td> -->
        <td>{{$information->email}}</td>
        <td>{{$information->casetype}} </td>     
        <td>{{$information->details}}</td>
        <td>{{$information->dname}}</td>
        <td>{{$information->address}}</td>
        <td>
            <img src="{{url('/uploads/'.$information->image)}}" width="100px" alt="image">
        </td>
        <td>{{$information->policestation}}</td>
        <td>{{$information->issued_at}} </td>
        <td>{{$information->officername}} </td>    
        <td>{{$information->officerphone}} </td>         
        
        
        
    </tr>
    @endforeach
    <!--end data retrive-->
</tbody> 
</table>
</div> 
<br>
<br>
<form >
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
        <br>
        <br>
        <div>
        <button style="margin-left:44%; background-color: red; background-color: #f44336; color: white; padding: 14px 25px; text-align: center; text-decoration: none;display: inline-block;"><a href="{{route('user.logout')}}" >LOG OUT</a></button>
       
</div>

            
        

    </div>
    </form>



    






  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c7a39386c463368","token":"03b65fdd9bdd49c7a08888ca7c0a1b7e","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>




  <script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
  </body>

</html>




