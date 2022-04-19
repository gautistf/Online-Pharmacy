<?php

include('includes/db.php');

if(isset($_GET['edit_deal'])){
	$deal_1_name = $_GET['edit_deal'];

	$get_deal_1 = "select * from deal_1 where deal_name = '$deal_1_name'";

	$run_deal_1 = mysqli_query($con, $get_deal_1);

	$row_deal_1 = mysqli_fetch_array($run_deal_1);
	
	$deal_1_name = $row_deal_1['deal_name'];
	$deal_1_cost = $row_deal_1['deal_cost'];
	$deal_1_count = $row_deal_1['deal_count'];
	

}

?>



<form action="" method="post" style="padding: 50px">

	<strong>Update Deal:</strong>
	<input type="text" name='new_deal_1' value="<?php echo $deal_1_name; ?>">
	<br><br>
	<strong>Deal Cost:</strong>
	<input type="text" name='deal_cost' value="<?php echo $deal_1_cost; ?>">
	<br><br>
	<strong>Deal Count:</strong>
	<input type="text" name='deal_count' value="<?php echo $deal_1_count; ?>">
	<br><br>
	<input type="submit" name="update_deal_1" value="Update Deal_1">
</form>	

<?php


	if(isset($_POST['update_deal_1'])){

		$update_deal_name = $deal_1_name;

		$new_deal_1 = $_POST['new_deal_1'];
		$deal_1_cost = $_POST['deal_cost'];
		$deal_1_count = $_POST['deal_count'];
		
		$update_deal_1 = "update deal_1 set deal_name = '$new_deal_1', deal_cost = '$deal_1_cost', deal_count = '$deal_1_count' where deal_name = '$update_deal_name'";

		$run_deal_1 = mysqli_query($con, $update_deal_1);

		if($run_deal_1){
			echo "<script>alert('Deal has been updated')</script>";
			echo "<script>window.open('index.php?view_deal_1','_self')</script>";
		}
	}
?>

