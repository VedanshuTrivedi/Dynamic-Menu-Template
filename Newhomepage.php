  <?php
function loop_array($array = array(), $parent_id=0){

	if(!empty($array[$parent_id])){
		echo '<ul>';
		foreach ($array[$parent_id] as $items) {
			$mycol=$items['color'];
			?>    <li  style="background-color: <?php echo $mycol;?>">             
				<?php echo $items['name']; 

	
			loop_array($array,$items['id']);
			echo  '</li>';
		}
		echo '</ul>';
	}
}

function display_menus(){
	$con=mysqli_connect("localhost",'root','','bisag');
	$query =$con->query("Select * from dynamic1");
	$array=array();
	if(mysqli_num_rows($query)){
		while($rows=mysqli_fetch_array($query)){
			$array[$rows['parent_id']][]=$rows;		
		}loop_array($array);
	}

}
?>