<!DOCTYPE html>
<html>
<head>
	<?php 
		include('admin/db_connect.php') 
	?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photography Services</title>

    <style>

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
        body {
            background-image: url('admin/images/home_bg.jpg');
        }
        h1{
            color: var(--text-color);
            margin-top: 50px;
            font-size: 50px;
        }
        .navbar {
            background-color: var(--main-color);
        }
        .logo {
            color: var(--bg-color);
            font-size: 1.8rem;
            margin-left: 20px;
            font-weight: 700;
        }
        .nav-link {
            color: var(--text-color);
            font-size: 20px;
            margin-left: 30px;
        }
        .nav-link:hover{
            text-decoration: underline;
            color: var(--bg-color);
            transition: .7s;
        }
        .container{
            margin-bottom: 40px;
        }
        .footcard{
            background-color: var(--main-color);
            height: 30px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footpara{
            color: var(--text-color);
            padding-top: 5px;
        }
        .tbl_container{
        	margin: auto;
            width: 80%;
            background-color: var(--bg-color);
            padding: 60px 60px;
            border-radius: 15px;
        }
        th, td{
        	color: var(--main-color);
        	text-align: center;
        	font-size: 20px;
        	width: 600px;
        	height: 50px;
        	border: var(--main-color) solid 1px;
        }
        th, table{
            border: var(--main-color) solid 2px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="index.php" class="nav-link"><span class="logo">Malcolm<br>Photography</span></a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="enquiry.php">Enquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link" style="margin-right: 100px;">Log-in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center><h1>PHOTOGRAPHY SERVICES</h1></center>
   	<div class="tbl_container mt-4">
		<table class="prices">
			<tr>
				<th>Category</th>
				<th>Price</th>
			</tr>
				<?php 
					$sql = "SELECT * FROM tbl_prices";
					$run = mysqli_query($con, $sql);
					if (mysqli_num_rows($run)>0) {
						foreach ($run as $data) {
				 ?>
			<tr>
				<td><?=$data['category']?></td>
				<td>$<?=$data['price']?>.00</td>
			</tr>

			<?php 
					}
				}
			 ?>
		</table>
	</div>
    <footer>
        <div class="footcard">
                <p class="footpara">&copy; 2024 Malcolm Photography. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>