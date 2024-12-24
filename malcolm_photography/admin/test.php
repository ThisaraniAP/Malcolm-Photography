

        :root {
            --bg-color: #3c8bab; /*blue*/
            --text-color: #dfe2d9; /*white*/
            --second-bg-color: #3f2e22; /*brown*/
            --main-color: #1e2d37; /*dark blue*/
        }
    <a href="login.php"><button>Log in</button></a>

<!DOCTYPE html>
<html>
<head>

	<?php 
 		include('db_connect.php');
	 ?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<title>Add Photograph</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background-color: #180f00;
		}
		*{
			color: #180f00;
			font-size: 18px;
		}
	</style>
</head>
<body>

	<div class="add_container col-lg-9">
		<form class="form" action="function.php" method="POST" enctype="multipart/form-data">

			<a href="main.php" class="btn btn-warning "><< Go Back</a>
			<h1 class="text-center mt-5" style="font-size: 50px;">ADD PHOTOGRAPHY </h1>

			<label>Name:</label>
			<input type="text" name="imgname" class="form"><br>

			<label>Category:</label>
			<select class="form" name="cat">
				<option value="Wild Life">Wild Life </option>
				<option value="Landscape">Landscape</option>
				<option value="Wedding">Wedding</option>
				<option value="Potrait">Potrait</option>
				<option value="Special Event">Special Event</option>
			</select><br>

			<label>Photograph:</label>
			<input type="file" name="image" class="form"><br>

			<label>Description:</label><br>
			<textarea rows="5" class="form col-lg-8" name="des"></textarea><br>

			<input type="submit" name="btn_add" class="btn btn-success" value="INSERT">
			<input type="reset"  class="btn btn-warning" value="CANCEL">

		</form>
	</div>	

</body>
</html>



<!-- edit_photo styling -->

<style type="text/css">
            :root {
                --bg-color: #180f00;
                --main-color: #12b412;
                --second-bg-color: #105c10;
            }
            * {
                color: var(--bg-color);
                font-size: 16px;
            }
            body {
                background-color: var(--bg-color);
            }
            h1 {
                color: var(--main-color);
                font-size: 60px;
            }
            div.container{
                padding-top: 30px;
                background-color: var(--second-bg-color);
                border-radius: 15px;
            }
            button.btn, input.btn, a.btn{
                border: var(--main-color) solid 2px;
                border-radius: 15px;
                background-color: var(--second-bg-color);
                color: var(--bg-color);
                width: 100px;
            }
            button.btn, input.btn{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            button.btn:hover, input.btn:hover, a.btn:hover{
                color: var(--main-color);
                background-color: var(--bg-color);
                border: var(--second-bg-color) solid 2px;
                transition: .7s;
            }
            form.form{
                background-color: var(--second-bg-color);
                margin-top: 10px;
                padding: 0px 60px 20px 60px;
                border-radius: 15px;
            }
            input.form{
                margin-top: 20px;
                margin-bottom: 10px;
            }
            label.lbl{
                padding-bottom: 8px;
            }
        </style>