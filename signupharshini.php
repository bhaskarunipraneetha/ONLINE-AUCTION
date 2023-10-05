<!DOCTYPE html>
<head>
  <style>
body{
    margin:0;
    padding:0;
    height:100%;
    position:absolute;
    top: 50%;
    left: 50%;
    transform:translate(-50%,-50%);
    width:400px;
    background: white;
}
.h1{
    text-align:center;
    margin-bottom: 80px;
    padding:20px;
    border-bottom: 1px solid silver;
}
*
{box-sizing: border-box}
input[type=email],input[type=email]{
    width:30%;
    padding: 15px;
    margin: 14px,20px;
    display: grid;
    border:none;
    background:#f1f1f1;}
input[type=text], input[type=password] {
  width: 35%;
  padding: 15px;
  margin: 14px,20px;
  display: grid;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 35%;
}
.container {
  padding: 16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 35%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
</head>
<body>
<form action="add.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <middle><h1>Sign Up</h1></middle>
    <label for="email"><b>Email:</b></label>
    <input type="email" placeholder="Enter Email" name="email" required><br><br>

    <label for="pwd"><b>Username:</b></label>
    <input type="password" placeholder="Enter Username" name="uname" required><br><br> 

    <label for="psw-repeat"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required><br><br>
    
    <label for="address"><b>Address:</b></label>
    <input type="text" placeholder="Enter Address" name="adr" required><br><br>

    <label for="phone number"><b>Phone number:</b></label>
    <input type="phone number" placeholder="Enter Phone number" name="pno" required><br><br><br><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="submit" >Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>