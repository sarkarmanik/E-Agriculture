<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
  
    <style>

form{
    width: 500px;
    height: 850px;
    padding: 30px;
    box-shadow: rgba(9, 30, 66, 0.25) 0px 8px 12px -2px,
    rgba(184, 189, 198, 0.25) 0px 5px 20px 20px;
    margin: 20px 400px;
    border-radius: 15px;
    font-size: 15px;
    color: white;

}

li{
    list-style: none;
    float: left;
    margin-left: 10px;
    font-size: 20px;
    color: black;

}

.head{
    width: 380px;
    height: 40px;
    padding: 1px;
    font-size: 32px;
    color: orange;
    text-align: center;
    border: 2px solid orange;
    margin-left: 40px;
    border-radius: 10px;
    font-family: 'Times New Roman';
}
.styl{
    width: 380px;
    height: 40px;
    border-radius: 3px;
    font-size: 20px;
    border: 1px solid orange;
    margin-top: 7px;
    margin-left: 40px;
    border-bottom: 2px solid orange;
    background: transparent;
   
}
.styl::placeholder{
    font-style: italic;
    font-size: 15px;
}
label{
    font-weight: bold;
    margin-left: 40px;
    font-size: 23px;
    color: green;
}
#para{
    margin-left: 40px;
    width: 380px;
    text-align: center;
    color: rgb(120, 157, 179);
    font-size: 20px;
    margin-top: 5px;
    
}

.sub{
    width: 210px;
    height: 35px;
    border-radius: 18px;
    border: 1px solid blue;
    background-color: blue;
    color: white;
    font-size: 20px;
    margin-top: 7px;
    margin-right: 5px;
    color: greenyellow;
}
.sub:hover{
    background: skyblue;
    color: red;
}

    </style>
 
</head>
<body>
<?php
  
  $connect=mysqli_connect('localhost','root','','project');
  
  if(isset($_POST['submit']))
  {
  
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
   $gender=$_POST['Gender'];
   $password=$_POST['password'];
  
   $insert="INSERT INTO `registration`(`FirstName`,`LastName`,`EmailAddress`,`PhoneNumber`,`Gender`,`UserPassword`) 
   VALUE('$firstname','$lastname','$email','$phonenumber','$Gender','$password')";
  
   $query=mysqli_query($connect,$insert);
  }
  
   ?>

    <form action="" method="POST">
        <h3 class="head">Registration For Account</h3><br>
        <label for="first">First Name</label><br>
        <input class="styl" type="text" name="firstname" id="first" placeholder="Enter First Name"><br><br>

        <label for="last">Last Name</label><br>
        <input class="styl" type="text" name="lastname" id="last" placeholder="Enter Last Name"><br><br>

        <label for="mail">Email Address</label><br>
        <input class="styl" type="email" name="email" id="mail" placeholder="Enter Your Email"><br><br>

        <label for="phon">Phone Number</label><br>
        <input class="styl" type="tel" name="phonenumber" id="phon" placeholder="Enter Your Number"><br><br>
        
         <label for="gen">Gender</label><br>
         <ul>
        <li><input class="gndr" type="radio" name="Gender" id="gen">Male</li>
        <li><input class="gndr" type="radio" name="Gender" id="gen">Female</li>
        <li><input class="gndr" type="radio" name="Gender" id="gen">Other</li>
        <br><br>
      </ul>

        <label for="pass">Password</label><br>
        <input class="styl" type="password" name="password" id="pass" placeholder="Enter Password"><br><br>

        <p id="para">By proceeding with the registration I confirm that I have read and accept the Terms and Conditions.<br><br>
        <input class="sub" type="submit" value="Sign Up" name="submit"><br><br></p>
    </form>

</body>
</html>