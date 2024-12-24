<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Malcolm Photography</title>

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
            margin-top: 70px;
            padding-top: 100px;
            margin-bottom: 40px;
            font-size: 55px;
        }
        .navbar {
            background-color: #1e2d37f5;
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
        .container{
            margin-bottom: 40px;
        }
        .card{
            background-color: var(--bg-color);
            padding: 40px;
            margin-top: 40px;
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
        .cardhead{
            color: var(--main-color);
            text-decoration: underline;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 30px;
        }
        .cardhead:hover{
            color: var(--second-bg-color);
            transition: .7s;
        }
        .cardpara{
            color: var(--second-bg-color);
            text-align: justify;
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
    <center><h1>Welcome to Malcolm Photography!</h1></center>
    <div class="container col-lg-9">
        <div class="row">
            <div class="card col-md-5" style="margin-right: 140px; margin-left: 25px;">
                <a href="gallery.php"><center><h2 class="cardhead">GALLERY</h2></center></a>
                <p class="cardpara">Explore a world of breathtaking imagery through Malcolm's carefully curated galleries. From the majestic peaks of the Highlands to the tranquil shores of remote islands, each photograph tells a unique story. Whether you're seeking inspiration for your next adventure or envisioning the perfect backdrop for your special day, Malcolm's portfolio offers a glimpse into the soul of Scotland's natural beauty.</p>
            </div>
            <div class="card col-md-5">
                <a href="pricing.php"><center><h2 class="cardhead">SERVICES</h2></center></a>
                <p class="cardpara">Curious about hiring Malcolm for your upcoming event? Learn more about his services and pricing to find the perfect fit for your needs. From intimate ceremonies to grand celebrations, Malcolm offers customizable packages tailored to capture your most cherished moments with authenticity and artistry.</p>
            </div>
        </div>
        <div class="row">
            <div class="card col-md-5" style="margin-right: 140px; margin-left: 25px;">
                <a href="about.php"><center><h2 class="cardhead">ABOUT</h2></center></a>
                <p class="cardpara">Malcolm Lismore's journey in photography is fueled by his deep love for the natural world. Specializing in the rugged Scottish landscape, its diverse wildlife, and captivating coastal birds, Malcolm's portfolio reflects his profound connection to the environment. Beyond his expertise in landscape and wildlife photography, Malcolm's versatility extends to covering weddings, portraits, and special events with a keen eye for detail and emotion.</p>
            </div>            
            <div class="card col-md-5">
                <a href="enquiry.php"><center><h2 class="cardhead">CONTACT</h2></center></a>
                <p class="cardpara">Ready to turn your vision into reality? Use our convenient enquiry form to reach out to Malcolm Lismore Photography. Share your contact details, event specifics, and any special requests, and let Malcolm's expertise transform your dreams into timeless memories.</p>
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
