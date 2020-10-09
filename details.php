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
			<div class="col-sm-6" style="padding-top: 2%; padding-left: 4%;"><h1 class="fontsize5">Enter Details</h1></div>
		</div>
	</div>

	<div style="padding-left: 4%;"><p style="border:2px solid orange; width: 15%; height: 0px;" ></p></div>

	<div class="jumbotron text-center" style="background-color: white;">

		<form action="pay.php" method="POST"> 

            <div class="container" style="width: 65%; border: 5px solid orange;">
				<div style="padding: 10px;">
					<div>
						<div class="jumbotron text-center" style="background-color: white;">
							<input type="text" name="name" class="form-control" placeholder="Enter Your Name" style="margin-bottom: 3%;">
	            			<input type="text" name="emailid" class="form-control" placeholder="Enter Your Email ID" style="margin-bottom: 3%;">
	            			<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" style="margin-bottom: 3%;">
	            			<input type="text" name="amount" class="form-control" placeholder="Enter Amount" style="margin-bottom: 3%;">

	            			<input type="text" name="message" class="form-control" placeholder="Enter Message" style="margin-bottom: 3%;">

	            			<input type="submit" value="Proceed" name="subbtn" class="btn btn-primary">
						</div>
					</div>
				</div>
			</div>
      </form>
	</div>
	

</body>
</html>