<?php
session_start();
echo "username:".$_SESSION['uname'];
$uname=$_SESSION['uname'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pac");
$s="select * from login where uname='$uname'";
$r=mysqli_query($con,$s);
while($row=mysqli_fetch_array($r))
{
    echo "<br>"
    echo "<form method='post' action=''>";
    echo "email:<input type='text' name='email' value=".$row['email'].">";
    echo "<br><br>";
    echo "username:<input type='text' name='uname' value=".$row['uname'].">";
    echo "<br><br>";
    echo "Password";
    echo "Address";
    echo "Phone number"
    echo "<br><br>";
    echo "<input type='submit'name='upd' value ='updatedata'>";
    echo "</form>";
    if(isset($_POST['upd']))
    {
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $adr=$_POST['adr'];
        $pno=$_POST['pno'];
        $sql="update login set email='$email',uname='$uname',pwd='$pwd',adr='$adr',pno='$pno',where uname='$uname'";
        $res=mysqli_query($con,$sql);
        if($res)
        {
            echo "your details are successfully updated";
        }
        else
        {
           echo "your detailsa are not updated";
        }
    }
}
?>