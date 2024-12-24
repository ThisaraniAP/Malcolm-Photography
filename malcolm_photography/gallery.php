<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photograph Gallery</title>

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
            font-size: 50px;
        }
        div.card, body {
            background-color: var(--main-color);
            color: #875d41;
        }           
        button.dashbtn {
            height: 100px;
            width: 100%;
            margin-bottom: 20px;
            font-size: 25px;
            font-weight: 600;
            border-radius: 15px;
            border: var(--text-color) solid 8px;
            background-color: var(--bg-color);
            color: var(--main-color);
        }
        div.card{
            margin: auto;
            border: transparent;
            background-color: var(--main-color);
        }
        button.dashbtn:hover{
            transition: .7s;
            background-color: var(--main-color);
            color: var(--text-color);
        }
        .container{
            background-color: var(--main-color);
            width: 60%;
            padding: 40px;
            border-radius: 15px;
        }
        .subdiv{
            margin: auto;
            width: 80%;
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
        .footcard{
            background-color: var(--main-color);
            height: 30px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        .footpara{
            color: var(--text-color);
            padding-top: 5px;
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

    <div class="container mt-4">
        <center><h1>GALLERY</h1></center>
        <div class="subdiv">
            <div class="row">
                <div class="card col-lg-6">
                    <a href="wild_life.php"><button class="dashbtn">Wild Life</button></a>
                </div>
                <div class="card col-lg-6">
                    <a href="landscape.php"><button class="dashbtn">Landscapes</button></a>
                </div>
                <div class="card col-lg-6">
                    <a href="wedding.php"><button class="dashbtn">Weddings</button></a>
                </div>
            </div>

            <div class="row">
                <div class="card col-lg-6">
                    <a href="portrait.php"><button class="dashbtn">Portrait</button></a>
                </div>
                <div class="card col-lg-6">
                    <a href="special_event.php"><button class="dashbtn">Special Events</button></a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footcard">
                <p class="footpara">&copy; 2024 Malcolm Photography. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>