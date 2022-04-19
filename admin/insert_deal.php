<form action="" method="post" style="padding: 50px">

	<strong>Insert New Deal:</strong>
	<input type="text" name='new_deal_1' required><br><br>
	<strong>Deal Cost:</strong>
	<input type="text" name="deal_cost"><br><br>
	<strong>Deal Count:</strong>
	<input type="text" name="deal_count"><br><br>
	<input type="submit" name="add_deal_1" value="Add Deal">
	
</form>	

<?php

	include('includes/db.php');
	if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not Admin','_self')</script>";
}
else {


	if(isset($_POST['add_deal_1'])){

		$new_deal_1 = $_POST['new_deal_1'];
		$deal_1_cost = $_POST['deal_1_cost'];
		$deal_1_count = $_POST['deal_1_count'];

		$insert_deal_1 = "insert into deal_1(deal_name, deal_cost, deal_count) values('$new_deal_1', '$deal_1_cost', '$deal_1_count')";

		$run_deal_1 = mysqli_query($con, $insert_deal_1);

		if($run_deal_1){
			echo "<script>alert('New Deal has been inserted')</script>";
			echo "<script>window.open('index.php?insert_deal_1','_self')</script>";
		}
	}
}
?>

