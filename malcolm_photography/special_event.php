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
    <title>Special Event Gallery</title>
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
        body {
            background-image: url('admin/images/scl_evnt.jpg');
        }
        h1{
            color: var(--text-color);
            padding-top: 100px;
            margin-top: 60px;
            font-size: 50px;
        }
        .navbar {
            background-color: var(--header-footer);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 3;
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
        .footcard{
            background-color: var(--header-footer);
            height: 30px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        .footpara{
            color: var(--text-color);
            padding-top: 5px;
        }
        .card{
            width: 30%;
            border-radius: 0%;
            margin-right: 3%;
            margin-bottom: 3%;
            background-color: var(--text-color);
            padding-top: 10px;
        }
        .container{
            padding: 80px 30px 30px 80px;
            border-radius: 15px;
            margin-top: 50px;
            background-color: var(--header-footer);
        }
        .photo{
            width: 100%;
        }
        .gap{
            background-color: transparent;
            height: 100px; 
            width: 100%;
        }
        .photo{
            width: 330px;
            height: 330px;
            object-fit: cover;
            border: black solid 2px;
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
</head>
<body>

    <center><h1>SPECIAL EVENT GALLERY</h1></center>
    <div class="container col-lg-10">
        <div class="row">
            <?php 
                $sql = "SELECT * FROM tbl_photographs WHERE Cat='Special Event';";
                $run = mysqli_query($con, $sql);

                if (mysqli_num_rows($run) > 0) {
                    foreach ($run as $data) {
             ?>
            <div class="card">
                <img src="admin/upload/<?= $data['Image'] ?>" class='photo'>
                <center><h4><?= $data['Name'] ?></h4></center>
                <center><p><?= $data['Description'] ?></p></center>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="gap"></div>
    <footer>
        <div class="footcard">
                <p class="footpara">&copy; 2024 Malcolm Photography. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>