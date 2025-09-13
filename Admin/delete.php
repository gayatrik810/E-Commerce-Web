 <?php 
 	include "config.php";

 	if (isset($_GET['ID'])) 
 	{
 	

 		$delete = mysqli_query($con,"delete from users where id='".$_GET['ID']."'");

 		if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "basic_table.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "view.php";';
			echo "</script>;";
		}
 	}

  ?>