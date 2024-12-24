<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Malcolm Log-in</title>

	<style type="text/css">
        :root {
            --bg-color: #dfe2d9; /*blue*/
            --text-color: #dfe2d9; /*white*/
            --second-bg-color: #3f2e22; /*brown*/
            --main-color: #1e2d37; /*dark blue*/
            --header-footer: #1e2d37bf; /*transparent*/       
          }
	    *{
	      	font-family: 'Bookman Old Style';
	    }
	    body{
	        background-image: url('admin/images/home_bg.jpg');
	        background-size: cover;
	    }
		h1 {
		    color: var(--main-color);
		    font-size: 50px;
		    margin-top: 20px;
		    margin-bottom: 50px;
		}
		.btn{
		    border: var(--main-color) solid 2px;
		    border-radius: 15px;
		    background-color: var(--main-color);
		    color: var(--bg-color);
		    width: 100px;
		    height: 50px;
			margin-top: 20px;
			margin-bottom: 10px;
		}
		.btn:hover{
		    color: var(--main-color);
		    background-color: var(--bg-color);
		    border: var(--main-color) solid 2px;
		    transition: .7s;
		}
		.container{
            width: 60%;
            background-color: var(--bg-color);
            padding: 60px 100px;
            border-radius: 15px;
		}
		.sub_con{
			width: 70%;
			margin: auto;
		}
		.inp{
			width: 100%;
			height: 40px;
			border: none;
			border-radius: 8px;
		}
	</style>
</head>
<body>
<div style="margin-top:60px;"></div>
<div class="container">
	<a href="index.php" class="btn btn-warning">< Back </a>
	<center><h1 class="dash">MALCOLM LOG-IN</h1></center>
	<div class="sub_con">
		<form method="post">
			<label>Username:</label><br>
			<input class="inp" type="text" name="username">
			<br><br>
			<label>Password:</label><br>
			<input class="inp" type="password" name="password">
			<br><br>
			<input class="btn" type="submit" value="Submit">
			<input type="reset" class="btn" value="Clear">
		</form>
	</div>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $username = $_POST["username"];
		    $password = $_POST["password"];
		    $valid_username = "malcolm_photography";
		    $valid_password = "photography123";

		    if ($username === $valid_username && $password === $valid_password) {
		        header("Location: admin/main.php");
		        exit();
		    } else {
		        echo "Invalid username or password. Please try again.";
		    }
		}
	?>
</div>
</body>
</html>