<?php 
function deletetab(){?>
	<?php
$con=mysqli_connect("localhost",'root','','bisag');
			if(isset($_POST['list']))
	{
				$deltab1=$_POST['list'];
				if($deltab1==null)
		{
 	 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid name"); }

</script>';
 	    }			else
 	       {
				$sql3="Select * from dynamic1 where name='$deltab1'";
				$query3=mysqli_query($con,$sql3);
				$row3=mysqli_fetch_row($query3);
				$deltab2=$row3[0];
				if($deltab2==null){
 	 			echo '<script type="text/javascript">

          		window.onload = function () { alert("Doesnt Exists"); }

				</script>';
 				 }
 				 else{

				$sql5=mysqli_query($con,"delete from dynamic1 where parent_id='$deltab2'");
				$sql4=mysqli_query($con,"delete from dynamic1 where name='$deltab1'");
			}
			}
	}

}
?>