<!DOCTYPE html>
<html>
	<head>

		<?php 
	 		include('db_connect.php');
		 ?>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

		<title>Edit Photograph</title>

	    <style type="text/css">
        :root {
            --bg-color: #dfe2d9; /*blue*/
            --text-color: #dfe2d9; /*white*/
            --second-bg-color: #3f2e22; /*brown*/
            --main-color: #1e2d37; /*dark blue*/
            --header-footer: #1e2d37bf; /*transparent*/ 
        }
			* {
				color: var(--main-color);
				font-size: 16px;
			}
			body {
		        background-image: url('images/dash.jpg');
		        background-size: cover;			
		    }
			h1 {
			    font-size: 60px;
			    margin-top: -10px;
			}
			div.container{
			    padding-top: 30px;
			    background-color: var(--bg-color);
			    border-radius: 15px;
			}
			button.btn, input.btn, a.btn{
			    border: var(--second-bg-color) solid 2px;
			    border-radius: 15px;
			    background-color: var(--main-color);
			    color: var(--bg-color);
			    width: 100px;
			}
			button.btn, input.btn{
				margin-top: 20px;
				margin-bottom: 20px;
			}
			button.btn:hover, input.btn:hover, a.btn:hover{
			    color: var(--text-color);
			    background-color: var(--bg-color);
			    border: var(--second-bg-color) solid 2px;
			    transition: .7s;
			}
			form.form{
			    background-color: var(--bg-color);
			    margin-top: 10px;
			    padding: 0px 60px 20px 60px;
			    border-radius: 15px;
			}
			input, select{
			    margin-bottom: 10px;
			}
			label.lbl{
				padding-bottom: 8px;
			}
	    </style>

	</head>
	<body>

		<?php 
				if (isset($_GET['ID'])) {
				   $test_id = mysqli_real_escape_string($con,$_GET['ID']);

				   $sql = "SELECT * FROM tbl_photographs  WHERE ID = '$test_id'";

				   $run=mysqli_query($con,$sql);

				   if (mysqli_num_rows($run)>0) {
				   		foreach ($run as $data) {		   		
		 ?>

		<div class="container mt-5 col-lg-9">
				
			<form class="form" action="function.php" method="POST" enctype="multipart/form-data">

				<a href="main.php" class="btn btn-warning ">< Back</a>
				<h1 class="text-center mt-1">EDIT PHOTOGRAPHS</h1>

				<div class="col-md-6">
					<input type="hidden" name="id" value="<?=$data['ID']?>">
					<label>Name</label>
					<input type="text" name="img_name" class="form-control" value="<?=$data['Name']?>">
				</div>

	            <div class="col-md-6">
					<label>Select a Category</label>
					<select class="form-control" name="cat" value="<?=$data['Cat']?>">
						<option value="Wild Life">Wild Life </option>
						<option value="Landscape">Landscape</option>
						<option value="Wedding">Wedding</option>
						<option value="Portrait">Portrait</option>
						<option value="Special Event">Special Event</option>
					</select>
				</div>

	            <div class="row">
					<div class="col-md-7">
						<label>Insert an Image</label>
						<input type="file" name="image" class="form-control" value="upload/<?=$data['Image']?>">
					</div>
					<div class="col-md-2">
						<img src="upload/<?=$data['Image']?>" width="100px;">
					</div>
				</div>

	            <div class="col-md-12">
					<label>Description:</label>
					<textarea rows="5" class="form-control" name="des"><?=$data['Description']?></textarea>
				</div>

				<?php 
							}
					   }
					}

 				?>

	            <div class="col-12">
					<input type="submit" name="btn_edit" class="btn btn-success" value="Update">
				</div>

			</form>
		</div>
	</body>
</html>