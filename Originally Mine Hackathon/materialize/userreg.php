<?php
$conn=new mysqli("localhost","root","","origanallymine");
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
$contact="";
$email="";
$state="";
$pin="";
$pan="";
$cardno="";
$ifsc="";
$uni=0;
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$password=$_POST["password"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$pan=$_POST["pan"];
$cardno=$_POST["cardno"];
$ifsc=$_POST["ifsc"];

$unique="select * from userreg where name='".$name."'";
$q3=$conn->query($unique);;
//echo "<script>alert($q3);</script>";	
if($q3)
{
$uni=mysqli_num_rows($q3);
}
if($uni>=1)
{
//echo "<script>alert('Already Registered by this name');</script>";	
}
else{
if($conn)
{
$in1="insert into userreg values('$name','$password','$contact','$email','$state','$pin','$pan','$cardno','$ifsc')";
$q2=$conn->query($in1);
//echo '<script type="text/javascript">alert("'.$in1.'");</script>';
if($q2)
{
	//echo "<script>alert('Registered successfully');</script>";
}
else
{
// echo "<script>alert('Registration unsuccessfull'".$q2.")</script>";
}
}
}
}