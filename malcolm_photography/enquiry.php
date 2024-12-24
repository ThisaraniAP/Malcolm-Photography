<!DOCTYPE html>
<html>
<head>
  <?php 
      include('admin/db_connect.php');
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="admin/style.css">
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
    label{
      font-size: 20px;
      font-weight: 600;
    }
    .mcon{
      padding-top: 10px;
      margin-left: 460px;
      margin-bottom: 67px;
    }
    .clrdiv{
      border-radius: 15px;
      position: absolute;
      margin: 20px 0px 0px 330px;
      width: 900px;
      height: 520px;
      background-color: var(--bg-color);
      z-index: -1;
    }
    input.cncl, button{
        border: var(--main-color) solid 2px;
        border-radius: 15px;
        background-color: var(--main-color);
        color: var(--bg-color);
        width: 200px;
        height: 50px;
    }
    input.cncl, button:hover{
        color: var(--main-color);
        background-color: var(--bg-color);
        transition: .7s;
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
  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inquiry Form</title>
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
    <div class="clrdiv"></div>
    <div class="mcon justify-content-center mt-1">
      <h1 style="margin-top: 40px;">ENQUIRY FORM</h1>
      <div class="col-lg-7" style="margin-top: 20px;">
        <form action="admin/function.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-md-0">
              <label>Email Address:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address" required>
            </div>
          </div>
          <div class="row" style="margin-top: 5px;">
            <div class="col-md-6 form-group">
              <label>Event Location:</label>
              <input type="text" name="loc" class="form-control" id="location" placeholder="Your Event Location" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <label>Event Date:</label>
              <input type="date" class="form-control" name="date" id="date" required>
            </div>
          </div>
          <div class="form-group mt-2">
            <label>Description:</label>
            <textarea class="form-control" name="des" rows="5" placeholder="Your Enquiry Description" required></textarea>
          </div>
          <div style="margin-top: 20px;">
            <button type="submit" name="btn_enquiry">Send Message</button>
            <input type="reset" class="cncl" value="Cancel">
          </div>
        </form>
      </div>
    </div>
    <footer>
      <div class="footcard">
        <p class="footpara">&copy; 2024 Malcolm Photography. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>