<?php
    include "dbcon.php";
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['uname']=$_POST['uname'];
        $_SESSION['pwd']=$_POST['pwd'];
        $uname=$_SESSION['uname'];
        $pwd=$_SESSION['pwd'];
        $query="select * from login where uname='$uname' and pwd='$pwd'";
        $result=mysqli_query($conn,$query);
       if($result){
         header("Location: home.php");}
        else{
            echo "<script>alert('password is invalid')</script>";
        }
              
       
    }
        ?>