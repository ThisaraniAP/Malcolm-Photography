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
    <title>About Malcolm</title>

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
            padding-top: 60px;
            margin-bottom: 40px;
            font-size: 55px;
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
        .about_txt{
            font-size: 17px;
            color: var(--main-color);
            text-decoration: none;
        }
        .abt_txt{
            margin: auto;
            width: 70%;
            background-color: var(--bg-color);
            padding: 80px 110px;
            border-radius: 15px;
        }
        .txt{
            margin-bottom: 70px;
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
    <center><h1>ABOUT MALCOLM</h1></center>
    <div class="abt_txt">
        <p class="about_txt">
            Welcome to Malcolm Photography, where the beauty of the Scottish landscape meets the lens of a passionate photographer. Based on the stunning North West coast of Scotland, Malcolm Lismore is a freelance photographer with an unwavering dedication to capturing the essence of nature in every frame.
            <br><br>
            Malcolm Lismore's journey in photography is fueled by his deep love for the natural world. Specializing in the rugged Scottish landscape, its diverse wildlife, and captivating coastal birds, Malcolm's portfolio reflects his profound connection to the environment. Beyond his expertise in landscape and wildlife photography, Malcolm's versatility extends to covering weddings, portraits, and special events with a keen eye for detail and emotion.
            <br><br>
            From the majestic peaks of the Highlands to the tranquil shores of remote islands, each photograph tells a unique story. Whether you're seeking inspiration for your next adventure or envisioning the perfect backdrop for your special day, Malcolm's portfolio offers a glimpse into the soul of Scotland's natural beauty.
            <br><br>
            From intimate ceremonies to grand celebrations, Malcolm offers customizable packages tailored to capture your most cherished moments with authenticity and artistry.Embark on a photographic adventure with Malcolm Lismore and experience the unparalleled beauty of Scotland through his lens. Whether you're an avid nature enthusiast, a soon-to-be-married couple, or simply seeking stunning imagery, Malcolm invites you to join him in celebrating the wonders of the natural world.</p>
        </div><div class="txt"></div>
    <footer>
        <div class="footcard">
                <p class="footpara">&copy; 2024 Malcolm Photography. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>