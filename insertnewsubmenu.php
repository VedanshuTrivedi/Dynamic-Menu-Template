<?php
function insertnewsubmenu(){?>
	<?php 
$con=mysqli_connect("localhost",'root','','bisag');
if(isset($_POST['list1'])){
	$tabname1=$_POST['list1'];
	$submenu=$_POST['submenu'];
	if($submenu==null){
 	 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid name"); }

</script>';
 	 }
 	 else{
	$sql1="Select * from dynamic1 where name='$tabname1'";
	$query2=mysqli_query($con,$sql1);
	$row=mysqli_fetch_row($query2);
	$tabname2=$row[0];
	$sql2="Insert into dynamic1(name,parent_id) values('$submenu',$tabname2)";
	$query1=mysqli_query($con,$sql2);
 	}
}
	
}

 ?>