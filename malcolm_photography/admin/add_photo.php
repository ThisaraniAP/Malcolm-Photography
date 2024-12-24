<!DOCTYPE html>
<html>
<head>
    <?php 
        include('db_connect.php');
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
            font-family: 'Bookman Old Style';
		}
		body {
	        background-image: url('images/dash.jpg');
	        background-size: cover;
		}
		h1 {
		    font-size: 60px;
		}
		div.container{
		    padding-top: 30px;
		    background-color: var(--bg-color);
		    border-radius: 15px;
		}
		button.btn, input.btn, a.btn{
		    border: var(--main-color) solid 2px;
		    border-radius: 15px;
		    background-color: var(--main-color);
		    color: var(--text-color);
		    width: 100px;
		}
		button.btn, input.btn{
			margin-top: 20px;
			margin-bottom: 10px;
		}
		button.btn:hover, input.btn:hover, a.btn:hover{
		    color: var(--main-color);
		    background-color: var(--bg-color);
		    border: var(--main-color) solid 2px;
		    transition: .7s;
		}
		form.form{
		    background-color: var(--bg-color);
		    margin-top: 10px;
		    padding: 0px 60px 20px 60px;
		    border-radius: 15px;
		}
		input.form{
		    margin-top: 20px;
		    margin-bottom: 10px;
		}
		.form-label{
			margin-bottom: -20px;
			margin-top: 10px;
		}
    </style>

    <title>Add Photograph</title>
</head>
<body>

    <div class="container mt-5 col-lg-9">
        <form class="form" action="function.php" method="POST" enctype="multipart/form-data">

            <a href="main.php" class="btn btn-warning">< Back </a>
            <h1 class="text-center mt-1">ADD PHOTOGRAPH</h1>

            <div class="col-md-6">
                <label class="form-label">Name:</label>
                <input type="text" name="imgname" class="form-control" id="imgname">
            </div>

            <div class="col-md-6">
                <label for="cat" class="form-label">Category:</label>
                <select class="form-select" name="cat" id="cat">
                    <option value="Wild Life">Wild Life</option>
                    <option value="Landscape">Landscape</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Portrait">Portrait</option>
                    <option value="Special Event">Special Event</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="image" class="form-label">Photo File:</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="col-md-12">
                <label for="des" class="form-label">Description:</label><textarea rows="5" class="form-control" name="des" id="des"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" name="btn_add" class="btn">Insert</button>
                <input type="reset" class="btn btn-warning" value="Cancel">
            </div>

        </form>
    </div>

</body>
</html>
