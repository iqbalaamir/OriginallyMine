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
$title="";
$category="";
$description="";
$payment="";
$authorized="";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$title=$_POST["title"];
$category=$_POST["category"];
$file1 = $category."/".$title;
//echo '<script type="text/javascript">alert("'.$file.'");</script>';
$description=$_POST["description"];
$val = $conn->query('select 1 from $name_work LIMIT 1');
if($val == FALSE)
{
$table="create table ".$name."_work(name varchar(50), title varchar(50),category varchar(50),file varchar(100),description varchar(100),authorized varchar(10),payment varchar(10))";
$q3=$conn->query($table);;
}
//echo "<script>alert($q3);</script>";	
$in1="insert into ".$name."_work values('$name','$title','$category','$file1','$description','no','no')";
$in2="insert into work values('$file1','$name','$category')";
$q2=$conn->query($in1);
$q4=$conn->query($in2);
//echo '<script type="text/javascript">alert("'.$in1.'");</script>';
            $target_dir = $category;
            $file_name = $_FILES['fileu']['name'];
            $file_tmp = $_FILES['fileu']['tmp_name'];
			$file_ext=strtolower(end(explode('.',$_FILES['fileu']['name'])));
			$filename=$target_dir ."/". $title;

            if (move_uploaded_file($file_tmp, $filename.".".$file_ext)) {
  //              echo "<h1>File Upload Success</h1>";
            } else {
    //            echo '<script type="text/javascript">alert("'.$filename.'");</script>';
            }
        
if($q2)
{
//	echo "<script>alert('work addition successfully');</script>";
}
else
{
// echo '<script type="text/javascript">alert("'.$q2.'");</script>';
}
}
?>
