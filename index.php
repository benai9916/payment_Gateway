<<!DOCTYPE html>
<html>
<head>
	<title>Spark Payment</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<style type="text/css">
	
	 h2{
		margin-top: 100px;
	}
	.btn{
	    padding-left: 30px;
	    padding-right: 30px;
	}
	input{
	    text-align: center;
	}
	
</style>

</head>
<body>

	<div class="container">
		<form action="pay_detail.php" method="post">
				<h2><center>Welcome to the Spark foundation</center></h2>
				<br>
				<center><h4>Please enter amount to donate</h4><input type="text" class="form-control" name="amount" placeholder="enter amount" required></center><br>
				
				<center><button class="btn btn-danger btn-lng  text-warning text-large" name="submit">DONATE</button></center>
				
		
		</form>
	</div>

</body>