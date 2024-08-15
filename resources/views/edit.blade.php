<!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Page</title>
            <style>
      body{
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      * {box-sizing: border-box}
      input[type=text], input[type=integer] {
         width: 100%;
         font-size: 28px;
         padding: 15px;
         margin: 5px 0 22px 0;
         display: inline-block;
         border: none;
         background: #f1f1f1;
      }
      label{
         font-size: 15px;
      }
      input[type=text]:focus, input[type=integer]:focus {
         background-color: #ddd;
         outline: none;
      }
      hr {
         border: 1px solid #f1f1f1;
         margin-bottom: 25px;
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
      .formContainer {
         padding: 16px;
      }
      .formContainer p{
         font-size: 28px;
      }
   </style>
        </head>
        <body>
        <h1>UPDATE</h1>
<form action="/edit" method="post">
        @csrf
       
        <input type="hidden" name="id" id="id" value="{{$data['id']}}">
        <label for="fname"><b>First Name:</b></label>
        <input type="text" name="fname" id="fname" value="{{$data['fname']}}">
        
        <label for="lname"><b>Last Name:</b></label>
        <input type="text" name="lname" id="lname" value="{{$data['lname']}}">
       
        
        <label for="event"><b>Event:</b></label>
        <input type="text" name="event" id="event" value="{{$data['event']}}">

        <label for="details"><b>Details:</b></label>
        <input type="text" name="details" id="details" value="{{$data['details']}}">

        <label for="bookingdate"><b>Booking Date:</b></label>
        <input type="integer" name="bookingdate" id="bookingdate" value="{{$data['bookingdate']}}"> 
        
        <label for="bookingloc"><b>Booking Location:</b></label>
        <input type="text" name="bookingloc" id="bookingloc" value="{{$data['bookingloc']}}"> 

        <button type="submit"><b>Update</b></button> 
    </form>
  
        </body>
        </html>