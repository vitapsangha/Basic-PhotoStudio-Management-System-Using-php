<!DOCTYPE html>
<html>
   <style>
      body{
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      * {box-sizing: border-box}
      input[type=text], input[type=password], input[type=integer] {
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
      input[type=text]:focus, input[type=password]:focus, input[type=integer]:focus {
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
<body>
<form action="{{route('addmem')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="formContainer">
         <h1>Sign Up Form</h1>
         <hr>
         <label for="name"><b>Name</b></label>
         <input type="text" placeholder="Enter your name" name="name" required>
         <label for="email"><b>Email</b></label>
         <input type="text" placeholder="Enter Email" name="email" required>
         <label for="password"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="password" required>
         <label for="repeatPassword"><b>Repeat Password</b></label>
         <input type="password" placeholder="Repeat Password" name="repeatPassword" required>
         <label for="memb_id"><b>Member_id</b></label>
         <input type="integer" placeholder="Enter your member id" name="memb_id" required>
        <br> <label>
            <input type="checkbox" checked="checked" name="remember" style="marginbottom: 15px"> Remember me
         </label>
         <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
         <div>
            <button type="submit" class="signup">Sign Up</button>
         </div>
      </div>
   </form>
</body>
</html>