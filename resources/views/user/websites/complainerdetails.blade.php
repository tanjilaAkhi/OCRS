
    <h1 style="text-align:center;">GOVERNMENT OF THE PEOPLES REPUBLIC OF BANGLADESH</h1>
    <h3 style="text-align:center;">COMPLAINER fORM wITH DETAILS</h3>

@foreach($lists as $key=>$info) 
          
            <p>Issu Date: {{$info->date}}</p>
            <p>Issue Time: {{$info->time}}</p>
            <p>Complainer Name: {{$info->cname}}</p>
            <p>Complainer Address: {{$info->c_address}}</p>
            <p>Complainer PhoneNumber: {{$info->cell}}</p>
            <p>Complainer Email: {{$info->email}}</p>
            <p>Complaint Type: {{$info->casetype}}</p>
            <p>Complaint Details: {{$info->details}}</p>
            <p>Defandent Name: {{$info->dname}}</p>
            <p>Defandant Address: {{$info->address}}</p>
            <p>Crime Place Photo: {{$info->photo}}</p>
            <p>Police Station : {{$info->cell}}</p>
            <p>Issused at: {{$info->email}}</p>

@endforeach
    


