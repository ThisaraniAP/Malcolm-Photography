<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<title>Dashboard</title>
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
        .dash{
        	color: var(--main-color);
        }          
		div.card, body {
			background-color: var(--bg-color);
			color: #875d41;
		}			
		button.dashbtn {
			height: 200px;
			margin-bottom: 30px;
			margin-top: 20px;
			width: 100%;
			font-size: 25px;
			font-weight: 600;
			border-radius: 15px;
			border: var(--main-color) solid 8px;
			background-color: var(--main-color);
			color: var(--text-color);
		}
		div.card{
			border: transparent;
		}
		button.dashbtn:hover{
			background-color: var(--bg-color);
			color: var(--main-color);
			transition: .7s;
		}
        .logo {
        	border: transparent;
        	background-color: var(--main-color);
        	border-radius: 10px;
            color: var(--text-color);
            font-size: 1.8rem;
            font-weight: 700;
            margin-top: -20px;
        }
        .logo:hover{        	
            text-decoration: underline;
            transition: .7s;
        }
	</style>
</head>
<body>
	<div class="container mt-5">
        <a href="/malcolm_photography/index.php"><button class="logo"><span>Malcolm<br>Photography</span></button></a>
		<center><h1 class="dash">MALCOLM PHOTOGRAPHY DASHBOARD</h1></center>
		<br>

		<div class="row">
			<div class="card col-lg-6">
				<a href="add_photo.php"><button class="dashbtn">Add Photograph</button></a>
			</div>
			<div class="card col-lg-6">
				<a href="edit_photo.php"><button class="dashbtn">Edit/Delete Photograph</button></a>
			</div>
		</div>

		<div class="row">
			<div class="card col-lg-6">
				<a href="view_photo.php"><button class="dashbtn">View Photographs</button></a>
			</div>
			<div class="card col-lg-6">
				<a href="view_enquiries.php"><button class="dashbtn">View Enquiries</button></a>
			</div>
		</div>

	</div>
</body>
</html>