<?php
$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"pac");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>