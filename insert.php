<?php 

function insertnewtab(){ ?>
	<?php 
 {
 
 	$con=mysqli_connect("localhost",'root','','bisag');
 	if(isset($_POST['submit'])){
 	 $tabname=$_POST['newtab'];
 	 if($tabname==null){
 	 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please enter valid name"); }

</script>';
 	 }
 	else{
       
      
 	$query=mysqli_query($con,"Insert into dynamic1(name,parent_id) values('$tabname',0)");
 		}
   			
 	
	
}
}

}
?>