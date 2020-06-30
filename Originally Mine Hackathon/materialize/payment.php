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
$customer="";
$owner="";
$work="";
$date="";
$amount="";
$payment="";
if(isset($_POST["submit"]))
{
$customer=$_POST["customer"];
$owner=$_POST["owner"];
$work=$_POST["work"];
$date=$_POST["date"];
$amount=$_POST["amount"];
$val = $conn->query('select 1 from $name_payment LIMIT 1');
if($val == FALSE)
{
$table="create table ".$owner."_payment(customer varchar(50), owner varchar(50),work varchar(50),date varchar(30),amount int(40),payment varchar(10))";
$q3=$conn->query($table);
//echo "<script>alert('$table');</script>";	
}
$in1="insert into ".$owner."_payment values('$customer','$owner','$work','$date','$amount','no')";
$q2=$conn->query($in1);
if($q2)
{
	//echo "<script>alert('payment addition successfully');</script>";
}
else
{
// echo "<script>alert('payment addition unsuccessfull'$q2)</script>";
}
}
