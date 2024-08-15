<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details</title>
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
button {
         font-size: 18px;
         font-weight: bold;
         background-color: rgb(10, 119, 13);
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 100%;
         opacity: 0.9;
      }
      button:hover {
         opacity:1;
      }
</style>
</head>
<body>
<h1>Member List</h1>
<table >
    <tr >
        <td><b>ID</b></td>
        <td><b>First Name</b></td>
        <td><b>Last Name</b></td>
        <td><b>Email</b></td>
        <td><b>Event</b></td>
        <!-- <td><b>Subscriptions</b></td>
        <td><b>Subscriptions Type</b></td>
        <td><b>Age</b></td>
        <td><b>Salary</b></td> -->
        

</tr>
<?php $sl=1;?>
@foreach($data as $subdata)
<?php //dd($data);?>
<tr>
        <td><?=$sl++;?></td>
        <td><?=$subdata->fname;?></td>
        <td><?=$subdata->lname;?></td>
        <td><?=$subdata->smember;?></td>
        <td><?=$subdata->event;?></td>
        

</tr>
@endforeach
</table>  
<button ><b><a href="adminview" style="text-decoration: none; color: inherit;">Back</a></b></button> 
</body>
</html>