<?php
	session_start();
	
	$name = $_SESSION['csname'];
    $email = $_SESSION['csemail'];
    $amount = $_SESSION['csamount'];
    $transactionid = $_SESSION['cstransactionid'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style.css">

</head>


<body>
	<div class="container-fluid" id="boxshadow">
		<div>
		<style="height: 1px;">
			<div>
				<div class="col-sm-6" style="padding-left: 4%; padding-top: 1%;">
				<h1>The Spark Foundation</h1>
				</div><br>
			</div>

			<div class="col-sm-6">
				<p style="padding-top: 3%;">
				<a href="home.php" target="_blank" style="padding-top: 0%; padding-left: 40%">
					<button class="btn" id="buttontwo1">HOME</button>
				</a>
			

			
				<a href="https://www.thesparksfoundationsingapore.org/contact-us/" target="_blank">
					<button class="btn" id="buttontwo2">CONTACT US</button>
				</a>

				</p><br>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div>
			<div class="col-sm-6" style="padding-top: 2%; padding-left: 4%;"><h1 class="fontsize5">Sucessful Transaction Details</h1></div>
		</div>
	</div>

	<div style="padding-left: 4%;"><p style="border:2px solid orange; width: 15%; height: 0px; margin-bottom: 5%;" ></p></div>


		<div class="container" style="width: 65%; border: 5px solid orange;">
			<div style="padding: 10px;">
				<div>
					<p>Details - </p>

					<table class="table table-stripped">
						<thead>
							<tr>
								<th>Tansaction ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Amount</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><?php echo $transactionid; ?></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $amount; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="jumbotron text-center" style="background-color: white;">
			<a href="home.php" target="_parent" class="jumbotron text-center" style="background-color: white;">
				<button class="btn" id="buttontwo1">Go Back to Home</button>
			</a>
		</div>
	

</body>
</html>
