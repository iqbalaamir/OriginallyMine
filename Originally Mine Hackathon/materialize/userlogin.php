<?php
$conn=mysqli_connect("localhost","root","","origanallymine");
/*$rows="select * from work";
$q1=$conn->query($rows);
$sno=0;
if($q1)
{
$c1=mysqli_num_rows($q1);
$sno=$c1+1;
}*/
$name="";
$password="";
$uni=0;
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$password=$_POST["password"];
$unique="select * from userreg where name='".$name."' and password='".$password."'";
$q3=$conn->query($unique);;
//echo '<script type="text/javascript">alert("'.$unique.'");</script>';
$c1=0;
if($q3)
{
$c1=mysqli_num_rows($q3);
if($c1==1)
{
header("Location:admin_payment-html.php");
  exit();
}
else
{
//echo "<script>alert('Wrong username or password');</script>";	
}
}
}
?>