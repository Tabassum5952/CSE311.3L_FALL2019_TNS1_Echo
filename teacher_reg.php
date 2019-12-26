
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Online Tuition Provider</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<link href="main.css" rel='stylesheet' type='text/css' />

	<link href="fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>

<body>
	<h1>Online Tuition Provider- Teacher Sign Up</h1>
	<div class="w3ls-login box">
		<img src="images/logo.png" alt="logo_img" />
		<!-- form starts here -->
		<form action="teacherreg_code.php" method="POST">
			<div class="agile-field-txt">
				<input type="text" name="username" placeholder="User Name" />
            </div>
            <div class="agile-field-txt">
				<input type="text" name="fname" placeholder="Your First Name" />
            </div>
            <div class="agile-field-txt">
				<input type="text" name="lname" placeholder="Your Last Name" />
            </div>
            <div class="agile-field-txt">
				<input type="text" name="institution" placeholder="Your Institution" />
            </div>
            <div class="agile-field-txt">
				<input type="text" name="phone" placeholder="Your Phone Number" />
            </div>
           
			<div class="agile-field-txt">
				<input type="password" name="password" placeholder="password"  id="myInput" />
			</div>
			<div class="agile-field-txt">
				<input type="text" name="description" placeholder="Description" />
			</div>
			<div class="w3ls-bot">
				<input type="submit" name="register" value="SIGNUP">
			</div>

			
		</form>
	</div>

</body>

</html>
	