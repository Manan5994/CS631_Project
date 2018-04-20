<?php
session_start();
?>
<html>
<head>
    <title>Online Computer Store</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<style type="text/css">

body {
    background-color: lightblue;
}
h1, h2 {
	text-align: center;
	color : blue;
}

input {
	color : blue;
}
</style>



</head>
<body>
	<h1>Newark-IT - Online Computer Store</h1>
	<h2>Welcome <?php echo $_SESSION["user"];  ?></h2>
	<div style="text-align: center;">
		<form  action="shopping.php" method="post">
			<input type="submit" value="Start Shopping"/><br><br>
		</form>
		
		<form  action="cart.php" method="post">
			<input type="submit" value="Show My Cart"/><br><br>
		</form>
		
		<form  action="transaction.php" method="post">
			<input type="submit" value="Show My Transactions"/><br><br>
		</form>
		
		<form  action="newShippingAddress.php" method="post">
			<input type="submit" value="Add new Shipping Address"/><br><br>
		</form>
		
		<form  action="newCreditCard.php" method="post">
			<input type="submit" value="Add new Credit Card"/><br><br>
		</form>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
		});
	
	</script>
</body>
</html>