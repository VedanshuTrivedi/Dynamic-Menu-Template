<?php require 'Newhomepage.php'; ?>
<?php 
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:700&display=swap" rel="stylesheet">


	<style type="text/css">
#headermain {
	/*background-image: url('images/header.gif');*/
	letter-spacing: 0.2em;
	margin: 8px 8px 0 8px;
	padding: 0 10px 10px 60px; 
	font: normal 100% Times; 
	height: 161px;
	background-image: url('background1.jpg');
	background-repeat: no-repeat;
	background-size: 1500px 200px;

	}
	body{
		font-family: 'Yanone Kaffeesatz', sans-serif;
		letter-spacing: 1.5px;
		border: 3px solid #3A291F;
		/*background-image: url('1.jpg');*/
	}

	.btn{
		background-color: white;
		font-family: 'Dosis', sans-serif;
		font-size: 18px;
		color:black;
		width:170px;
		height:50px;
		border-radius:0px;
	}

	.btn:hover{
		background-color: red;
		color: white;
	}
	.btn1{
		background-color: white;
		font-family: 'Dosis', sans-serif;
		font-size: 18px;
		color:black;
		width:170px;
		height:50px;
		border-radius:0px;
	}

	.btn1:hover{
		background-color: green;
		color: white;
	}


	.colorch {
		font-size: 40px;
		animation:5s cc infinite;
		font-family: 'Lobster', cursive;
	}

	@keyframes cc{
		0% {color: red ;}
		25% {color: blue ;}
		50% {color: green;}
		75% {color: orange;}
	}


	#menu {
		width: 800px;
		height: 50px;
		clear: both;
		background-color: rgb(43,43,43);
	}
	/*h1
	{
		color: #C70039;
		background-color: gray;
		border:10px solid #154360;
		border-radius:50px;
		margin:50px;
		padding:5px;
	}*/
	h2{
		text-align: center;
	}

	a
	{
		padding: 20px;
		margin:10px;
		margin-left: 50px;
	}	
	a:hover
	{
		color:orange;
	}
	a:active
	{
		color:red;
	}
	
	div
	{
		height:30px;
		margin-left: 60px;
		margin-right: 50px;
	}

	nav{
		margin-left: 60px;
		margin-right: 60px;
	}

	.nav ul {
  list-style: none;
  background-color: gray;
  text-align: center;
  padding: 0;
  margin: 0px;
  border: 8px solid #AF5D62;



}

.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  text-align: center;
  

}
.nav li:hover{
	background-color: skyblue;
}

.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  padding-left: 15px;

  transition: .3s background-color;
}

.nav a:hover {
  background-color: #005f5f;

}

.nav a.active {
  background-color: #aaa;
  color: #444;
  cursor: default;
}

/* Sub Menus */
.nav li li {
  font-size: .8em;

 
}



@media screen and (min-width: 650px) {
  .nav li {
    width: 130px;
    
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    display: inline-block;
    margin-right: -4px;
  }

  .nav a {
    border-bottom: none;
  }

  .nav > ul > li {
    text-align: center;

  }

  .nav > ul > li > a {
    padding-left: 0;

  }

  /* Sub Menus */
  .nav li ul {
    position: absolute;
    margin-left: -5px;
    display: none;
    width: 130px;
    border:3px solid #AF5D62;
    background-color: skyblue;
  }

  .nav li:hover ul {
    display: block;
  }

  .nav li ul li {
    display: block;
    border-bottom:3px solid #AF5D62; 
    
  }
}
 form{
 	opacity: 0.9;
 }
 h3{
 	margin: 0; 
 	margin-left: 206px;
	text-align: right;
	color: #AF5D62;
	font-size:45px;
 }


</style>
</head>
<body style="background-image: url(download1.jpeg);background-repeat: no-repeat;background-size: 1600px 1600px;">
	
		<center> <span class="colorch"> Dynamic Template Management</span></center>
	<div id="headermain">
	
						<div >
		<img id="uploadPreview" align="right" style="width: 45px; height: 45px; margin-top:35px;" />
	</div>
	 <?php
		if(isset($_POST["title"]))
		{
			$title1 = $_POST['title'];
			echo "<h3>".$title1."</h3>"; 
		}
		// else{
		// 	echo "My Website";
		// }
		//  ?>	

					
	</div>
	<br/><br/><br/><br/>
	<nav class="nav">
	<?php 
		display_menus();
	?>
 	</nav>


<br/><br/>

<!-- add logo -->
<table>
<tr>
	<td >
		<fieldset style="margin-left: 120px; margin-right: 150px; text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 600px 300px;border:2px solid black;height: 150px; width: 500px;">
 		<legend style="margin:0 auto;border:2px solid black; background-color: #FFF;"> <h2> Please Select Logo Image </h2></legend>
 		
		 
			<br>
			<form method="POST" enctype="multipart/form-data">
				
				
<input id="uploadImage" type="file" name="myPhoto" accept="Image/*" onchange="PreviewImage();" />
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

</form>
</td>
<!-- GIVE sTITLE -->
<td>
<fieldset style="text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 600px 300px;border:2px solid black;height: 150px;width: 500px;">
		<legend style="margin:0px auto;border:2px solid black; background-color: #FFF; text-align: center;">
				<h2>Give the title</h2>
		</legend>
		<form method="POST">
		<input type="text" name="title">
		<input type="submit" class="btn1" name="submit0">
		</form>
		
	</fieldset>
</td>
</tr>
</table>


<!--add parent tab -->
 
 <table cellspacing="3px" style="margin-top: 50px; margin-left: 50px">
 	<tr>
 	<td width="33%"><fieldset style="text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 600px 600px;border:2px solid black;height: 350px; margin-left: 10px">
 		<legend style="margin:0 auto;border:2px solid black; background-color: #FFF;"> <h2> To add a new TAB </h2></legend>
 	<br>

 	<form method="POST" >
 	<p style=" font-size: 24px;">Please enter the Name of the new Tab: &nbsp;<input type="text" name="newtab"></p>
 

 <p style=" font-size: 25px;">Please Select the color of the tab <br>
 	<input type="color" name="mycolor"> <br><br>
	<input type="submit" class="btn1" name="submit1" >
	
</fieldset>
</td>
 </form>
 
 <!--add child tab -->
 
 <form method="POST" action="homepage.php">
 	<td width="33%" ><fieldset style="text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 600px 600px;border:2px solid black; height: 350px;">
 		<legend style="margin:0 auto; border: 2px solid black;background-color: #FFF;"> <h2>To add a Sub Menu </h2> </legend>
 	<p style="font-size: 25px;">	
 	Select the parent tab name: <?php 
 	$con=mysqli_connect("localhost",'root','','bisag');
 	$selectname1=mysqli_query($con,"select * from dynamic1 where parent_id=0"); ?>
 	<select name='list1'> 
 		<option></option><?php 
 	while($selectresult1=mysqli_fetch_assoc($selectname1))
 	{ ?>
 		
 			<option value="<?php echo $selectresult1['name']; ?>" ><?php echo $selectresult1['name']; ?></option>
 		
 	<?php } ?>

</select>
 <br>
	Give heading to Submenu: <input type="text" name="submenu"><br>
	<p style=" font-size: 25px;">Please select the color of tab 
	<input type="color" name="mycolorsub">
	</p>
	<input type="submit" class="btn1" name="submit2">
</p>
 </form>
</fieldset>
</td>


 <!-- delete any tab -->
 
 <td width="33%">
 	<fieldset style="text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 600px 600px;border:2px solid black; height: 350px;">
 		<legend style="margin:0 auto;border:2px solid black; background-color: #FFF;"> <h2> To Delete a TAB </h2></legend>
 	<br>

 	<form method="POST" action="homepage.php">
 	<p style=" font-size: 25px;">Please select the Name of the Tab: &nbsp;<?php 
 	$con=mysqli_connect("localhost",'root','','bisag');
 	$selectname=mysqli_query($con,"select * from dynamic1"); ?>
 	<select name='list'> 
 		<option></option><?php 
 	while($selectresult=mysqli_fetch_assoc($selectname))
 	{ ?>
 			
 			<option value="<?php echo $selectresult['name']; ?>" ><?php echo $selectresult['name']; ?></option>
 		
 	<?php } ?>

</select>
 <br>
 
	<input type="submit" class="btn1" name="submit3" >
</fieldset>
</td>
</tr>

<!-- php code for generating parent tab -->

 <?php 
 { 
 	$con=mysqli_connect("localhost",'root','','bisag');
 	if(isset($_POST['submit1'])){
 	 $tabname=$_POST['newtab'];
 	 $myfavcolor=$_POST['mycolor'];
 	 if($tabname==null || $myfavcolor==null){
 	 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid name and color"); }

</script>';
 	 }
 	else{
 	$query=mysqli_query($con,"Insert into dynamic1(name,parent_id,color) values('$tabname',0,'$myfavcolor')");

 		header("Refresh: 1;");
 		}	
}
}
 ?>

<!-- php code for generating child tab -->
 
 <?php 
$con=mysqli_connect("localhost",'root','','bisag');
if(isset($_POST['submit2'])){
	$tabname1=$_POST['list1'];
	$submenu=$_POST['submenu'];
	$myfavsub=$_POST['mycolorsub'];
	if($submenu==null || $myfavsub==null || $tabname1==null){
 	 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid name"); }

</script>';
 	 }
 	 else{
	$sql1="Select * from dynamic1 where name='$tabname1'";
	$query2=mysqli_query($con,$sql1);
	$row=mysqli_fetch_row($query2);
	$tabname2=$row[0];
	$sql2="Insert into dynamic1(name,parent_id,color) values('$submenu',$tabname2,'$myfavsub')";
	$query1=mysqli_query($con,$sql2);
	header("Refresh: 0;");
	ob_enf_fluch();
 	}
}
 ?>	
 
<!-- php code for delete any tab -->

<?php
$con=mysqli_connect("localhost",'root','','bisag');
			if(isset($_POST['submit3']))
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
				header("Refresh: 1;");
			}
			}
	}
 ?>
 </table>
<br>
<br>
<!-- download code -->
		<div style="height: 40px;">
		<fieldset style="text-align: center; background-image: url(download.jpeg);background-position: all;background-size: 900px 300px;border:2px solid black;height: 120px;">
 		<legend style="margin:0 auto;border:2px solid black; background-color: #FFF; "> <h2> To download code</h2></legend>
		<form method="GET"> 
			<input type="button" class="btn" value="Menubar Retrival" onclick="document.getElementById('link').click()" >
			<a id="link" href="menu.php" download hidden> </a>
			<input type="button" class="btn" value="Master File" onclick="document.getElementById('link1').click()" >
			<a id="link1" href="master.php" download hidden> </a>
			<input type="button" class="btn" value="Header and Footer" onclick="document.getElementById('link2').click()" >
			<a id="link2" href="header.php" download hidden> </a>

					</form>

	</div>

 <!-- footer menu -->
 <br>
 <br>
 <br>
 <br><br>
 <br>
 <br>
 <br>
 <nav class="nav">
	<?php 
		display_menus();
	?>
 	</nav>

 	
</body>
</html>