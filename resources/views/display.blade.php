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

<h2>Bookings</h2>

<table>
<tr >
        <td><b>ID</b></td>
        <td><b>First Name</b></td>
        <td><b>Last Name</b></td>
        <td><b>Event</b></td>
        <td><b>Details</b></td>
        <td><b>Booking date</b></td>
        <td><b>Booking loc</b></td>
       
       
        <td><b>Operations</b></td>
        
        

</tr>
<?php $sl=1;?>
@foreach($members as $members)
<?php //dd($data);?>
<tr>
        
        <td><?=$members->id;?></td>
        <td><?=$members->fname;?></td>
        <td><?=$members->lname;?></td>
        <td><?=$members->event;?></td>
        <td><?=$members->details;?></td>
        <td><?=$members->bookingdate;?></td>
        <td><?=$members->bookingloc;?></td>
       
        
        <td><a href={{"edit/".$members['id']}} class="call_btn">
          Edit
        </a><br>
        <a href={{"delete/".$members['id']}} class="call_btn">
          Delete
        </a></td>
        
       
        

      
        

</tr>
@endforeach
</table>
<button ><b><a href="adminview" style="text-decoration: none; color: inherit;">Back</a></b></button> 
</body>
</html>

