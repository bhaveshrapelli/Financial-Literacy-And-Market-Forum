<?php
session_start();
// if (!isset($_SESSION['users_logged_in'])) {
//   header("Location: login.php");
//   exit();
// }
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="rupee.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">

  <script defer src="rupee.svg"> </script>
  <title>CashCourse</title>
</head>

<body>
  <script src="script.js"></script>



  <!--Navbar-->
  <div>
    <h1>CashCourse now in 100+ countries</h1>
  </div>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light backcolor">
    <a class="navbar-brand" href="index.php"><img src="logo2.png" class="navimg img-fluid" /></a>

    <button class="navbar-toggler " type="button " data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavSupported ">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active navpad">
          <a class="nav-link " href="index.php">Home</a>
        </li>
        <li class="nav-item active navpad ">
          <a class="nav-link " href="budget.php">Financial Plan</a>
        </li>
        <li class="nav-item active navpad ">
          <a class="nav-link " href="saving.php">Savings</a>
        </li>
        <li class="nav-item active navpad ">
          <a class="nav-link " href="invest.php">Investing</a>
        </li>
        <li class="nav-item active navpad">
          <a class="nav-link " href="credit.php">Credit Basics</a>
        </li>
        <?php if (isset($_SESSION['users_logged_in'])): ?>
          <li class="nav-item active navpad text-danger">
            <a class="nav-link" href="Logout.php">Logout</a>
          </li>
        <?php endif; ?>
        <?php if (!isset($_SESSION['users_logged_in'])): ?>
          <li class="nav-item active navpad">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php endif; ?>

      </ul>
    </div>
  </nav>
  <br><br>
  <!-- Header -->

  <!--
  <header class="d-flex align-items-center">
    <div class="headercontainer">
      <h1 class="herotitle">CashCourse</h1>
      <h1 class="herotitle">Your guide to the best financial literacy tips and resources. </h1>
      <br>
        <p id="herop">We break down complicated financial topics into an easy-to-use website with the mission of teaching teens about financial independence. An overwhelming amount of teens aren't taught essential skills because of the lack of personal finance courses in schools</p>
      <br>
    </div>
    <div class="img-container">
      <img src="https://lh3.googleusercontent.com/UNiRER4sGNs3JHdFiGe57kYtqf0PcVEUU7dayRdKtOgmGM9unNEyHi7jB2KHltVmEiHyprQ7RfO4loIdaQ65K6MPj2izYi6_c0n2HO6x6vt9enx1X4EFhCSfiaBf4qqT5vRHYLx7TR4=w600-h315-p-k" id="heroimage"/> 
    </div>
   -->

  <br>

  <header>
    <div class="video-container">
      <video autoplay loop muted height="200">
        <source src="CashCourseheader.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="overlay-desc">
        <img src="logo.png" class="" />

      </div>
    </div>

  </header>

  <br><br><br>
  <!--
<header class="home-hero" role="banner">
  <video autoplay="" id="heroVideo" loop="" muted="" height="100px" poster="herovideo.mp4">
    <source src="herovideo.mp4" type="video/mp4" />
  </video>
  <img alt="poster image mobile" class="poster img-fluid mx-auto d-block d-sm-none" src="herovideoimg.png" />
  <div class="container d-flex flex-row">
    <div class="row">
      <div class="col-lg-12 d-flex flex-column justify-content-center text-white py-md-5 text-container">
        <h2 class="display-4 mb-0 herotext"><img src="https://lh3.googleusercontent.com/9ojdFlJXVmASc0LmH-0T2WuJMFWX30vE-1kn4FpfOKlKGsVKUPAMZ_LrSBiZGCy5mOWq5Q1aSWU_EcbKm-4Fc34zmFEbfMHYoD1Rqd3A6acLmeIFVbtMCGrkZ9VIAr9ypQM4OaHobWI=w600-h299-p-k"class="navimg"/><span class="d-block font-weight-bold herotext"></span></h2>
        <p class="lead my-4 herotext">
          <br>We break down complicated financial topics into an easy-to-use website with the mission of teaching teens about financial independence. An overwhelming amount of teens aren't taught essential skills because of the lack of personal finance courses in schools</p>
      </div>
    </div>
  </div>
</header>
-->



  <br><br><br>



  <div class="d-flex align-items-center">
    <div class="headercontainer">
      <h1 class="herotitle">CashCourse</h1>
      <h1 class="herotitle">YOUR GUIDE TO THE BEST FINANCIAL LITERACY TIPS </h1>
      <br>
      <p id="herop">We break down complicated financial topics into an easy-to-use website with the mission of teaching
        teens about financial independence. An overwhelming amount of teens aren't taught essential skills because of
        the lack of personal finance courses in schools</p>
      <br>
    </div>
    <div class="img-container">
      <img
        src="https://lh3.googleusercontent.com/UNiRER4sGNs3JHdFiGe57kYtqf0PcVEUU7dayRdKtOgmGM9unNEyHi7jB2KHltVmEiHyprQ7RfO4loIdaQ65K6MPj2izYi6_c0n2HO6x6vt9enx1X4EFhCSfiaBf4qqT5vRHYLx7TR4=w600-h315-p-k"
        id="heroimage" />
    </div>
  </div>
  <br>
  <br>


  <br><br><br>
  <div class="services container-fluid" id="technicalskills">
    <h1>Why learn Financial Literacy</h1>
    <br>
    <div class="container">
      <h2>Financial literacy is the most valuable skill to learn as it allows you to control your money and make it work
        for you. They goal is to to become financially independent meaning not having to worry to work another day.</h2>
      <div class="img-container">
        <img src="6685.jpeg" id="heroimage" />
      </div>
    </div>
  </div>




  <br><br>


  <div id="technicalskills" class="services container-fluid">

    <div>
      <div class="container facts">
        <div class="row">
          <div class="col-sm">
            <h1>11.5</h1>
            <h2>TRILLION</h2>
            <p>is the total amount of debt that American consumers owe</p>
          </div>
          <div class="col-sm">
            <h1>52%</h1>
            <h2>TEENS</h2>
            <p>sais they want to learn more about how to manage their money</p>
          </div>
          <div class="col-sm">
            <h1>33%</h1>
            <h2>PARENTS</h2>
            <p>talk to their kids about money regularly</p>
          </div>
          <div class="col-sm">
            <h1>85%</h1>
            <h2>PARENTS</h2>
            <p>thought that a course in personal finance should be a high school graduation requirement</p>
          </div>
        </div>

      </div>
      <br>
    </div>
  </div>
  </div>



  <br>
  <br>

  </section>

  <!--Interests-->
  <section id="interests" class="sponsor team">
    <hr>
    <br>
    <h1>Topics</h1>

    <br>
    <div class="row">
      <div class="col-md-3">
        <div class="nicecontainer">
          <img
            src="https://lh3.googleusercontent.com/c6fWqPdRXcQ-MYEWc59SaZoVqZ5g7wcT9_qQBTT4BBUD3SfDcu2GJ3xzo1r8F3-mPRGIqdxjLpaV8wXHI91PFV5pCLG0qzoFTD8f2eUiMoyj9rmZbaGqK8hdgcWhBBsNglMBOojMCXk=w600-h315-p-k" />
          </a>
          <h3>Financial Plan</h3>
          <hr>
          <p>Learn how to set financial goals and tips to get started</p>
          <a href="budget.php" ><button type="button" class="btn btn-primary">Click Me!</button></a>
          <br><br>
        </div>
      </div>
      <div class="col-md-3">
        <div class="nicecontainer">
          <img
            src="https://lh3.googleusercontent.com/G5HZ9yiwj-ZWP4PdLe-r93at6fWHv0PTA4CkxTX9Sy815GGI7jIimEk24y5hivzXVlRZ2Io3uv1JlHsSyHzjWISAQQRAj-kCo9Sk0b1vfxqyMfFC2ojCA7Qh6Ns3ilPY8JMsBp0kuNc=w600-h315-p-k" />
          <h3>Savings</h3>
          <hr>
          <p>Learn how to be frugle and save up money for long-term goals</p>
          <a href="saving.php"><button type="button" class="btn btn-secondary">Click Me!</button></a>
          <br><br>
        </div>
      </div>
      <div class="col-md-3">
        <div class="nicecontainer">
          <img
            src="https://lh3.googleusercontent.com/T13jX3qP1NXkWl0yLbfpHwnDOahOkwlb4BS3FO7yy23CfLFufSYZSIw9zYx9osc_khCX8hLZoK4K6vUVkNzgEEcStiDFRoBuwRqEl4lGRM2tWDmjkNz2DG9m7N595FwzCBGDkpkxg1U=w600-h315-p-k" />
          <h3>Investing</h3>
          <hr>
          <p>Learn different types of investments and how to manage risk</p>
          <a href="invest.php"><button type="button" class="btn btn-success">Click Me!</button></a>
          <br><br>
        </div>
      </div>
      <div class="col-md-3">
        <div class="nicecontainer">
          <img
            src="https://lh3.googleusercontent.com/WMq8CA0_dxFe4N9hC2060KOLHLbW9f5D3hfWBCtEkksKyV0vsuGxenzRsxW4FjsGNCWgYlcVMTECPOX_AwdpEtRgc4IMk4904MZQgYdwUeBgNl1yTjH0vJEi2_MOQkWs_hmNs9vRUeI=w600-h315-p-k" />
          <h3>Credit Basics</h3>
          <hr>
          <p>Learn the importance of credit and its multiple uses</p>
          <a href="credit.php"><button type="button" class="btn btn-danger">Click Me!</button></a>
          <br><br>
        </div>
      </div>

  </section>

  <br>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <p>
            <i class="fi-xnsuxl-house-solid"></i>
            Mumbai
          </p>
          <p>
            <i class="fi-xwsuxl-envelope-solid"></i>
            <a href="mailto:rampratapsahani209@gmail.com">rampratapsahani@gmail.com</a>
          </p></a>
          <p>
            <i class="fi-xnsrxl-phone-solid"></i>
            +91 9769634492
          </p>
        </div>

        <div class="col-sm">
          <h2>Social Media</h2>
          <div class="row">
            <div class="col-sm">

              <a href="https://instagram.com/shubmore1303?igshid=YmMyMTA2M2Y=" target="_blank"
                rel="noopener noreferrer">
                <img src="https://girlswhocode.com/assets/images/craft-prod/images/icons/Instagram.svg" alt="Instagram"
                  title="Instagram"></a>

            </div>

            <div class="col-sm">

              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" rel="noopener noreferrer">
                <img src="https://girlswhocode.com/assets/images/craft-prod/images/icons/Youtube.svg" alt="Youtube"
                  title="Youtube"></a>

            </div>


            <div class="col-sm">

              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="https://girlswhocode.com/assets/images/craft-prod/images/icons/facebook.svg" alt="Facebook"
                  title="Facebook">
              </a>

            </div>

            <div class="col-sm">

              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="https://girlswhocode.com/assets/images/craft-prod/images/icons/Twitter.svg" alt="Twitter"
                  title="Twitter">
              </a>

            </div>

            <div class="col-sm">

              <a href="https://www.linkedin.com/in/shubham-more-028844272" target="_blank" rel="noopener noreferrer">
                <img src="https://girlswhocode.com/assets/images/craft-prod/images/icons/Linked-In.svg" alt="Linked In"
                  title="Linked In">
              </a>


            </div>
          </div>

        </div>

      </div>

      <div class="copyright-text">
        <p></p>
        <p></p>
      </div>
    </div>
  </footer>

  <button class="open-button" onclick="openForm()"><img src="https://image.flaticon.com/icons/svg/892/892228.svg"
      style=" height:2rem;width:2rem;">Chat</button>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>