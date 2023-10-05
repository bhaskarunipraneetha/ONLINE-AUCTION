<?php
 if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $uname=$_POST['uname'];
     $pwd=$_POST['pwd'];
     $adr=$_POST['adr'];
     $pno=$_POST['pno'];
     $con=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($con,"pac");
     $sql="insert into login (email,uname,pwd,adr,pno) values ('$email','$uname','$pwd','$adr','$pno')";
     $res=mysqli_query($con,$sql);
     if($res){
         echo "<script>alert('you have successfully signed up now log in to your account')</script>";

     }
 }