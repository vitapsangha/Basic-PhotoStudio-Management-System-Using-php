<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  
  background-color: lightgoldenrodyellow;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:goldenrod;
  padding: 5px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Make a Booking</h2>

<div class="container">
<form action="{{route('add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Purpose</label>
      </div>
      <div class="col-75">
        <select id="event" name="event">
          <option value="wedding">Wedding</option>
          <option value="bithday_party">Birthday Party</option>
          <option value="puja">Puja</option>
          <option value="others">others</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="details">Details of event</label>
      </div>
      <div class="col-75">
        <textarea id="details" name="details" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Date of booking</label>
      </div>
      <div class="col-75" >
        <input type="date" id="bookingdate" name="bookingdate" placeholder="Your booking date..">
      </div></div>
      <div class="row">
      <div class="col-25">
        <label for="subject">Location of booking</label>
      </div>
      <div class="col-75" >
        <input type="text" id="bookingloc" name="bookingloc" placeholder="Your booking location..">
      </div></div>
      <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
      <hr>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
