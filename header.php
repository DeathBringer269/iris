<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IRIS SFIT 2020</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="IRIS SFIT 2020"/>
    <meta property="og:image" content="https://iris.sfit.ac.in/images/icons/themeLogo-min2-min.png"/>
    <meta property="og:url" content="https://iris.sfit.ac.in"/>
    <meta property="og:description" content="IRIS, the annual cutural festival of SFIT, is one of the most eagerly anticipated events in the collge calendar. ">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

<!--      Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
      <link rel="manifest" href="images/favicon/site.webmanifest">
    
      <style>
          .irisLogo {
              display:inline;
              width:120px;
              height:59px;
          }
      </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"> <img src="images/icons/irisLogo.png" class="irisLogo"></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="schedule.php" class="nav-link"><span>Schedule</span></a></li>  
                <li class="nav-item"><a href="scoreBoard.php" class="nav-link"><span>Scoreboard</span></a></li>    
                <li class="nav-item"><a href="gallery.php" class="nav-link"><span>Gallery</span></a></li>
                <li class="nav-item"><a href="raagas/" class="nav-link"><span>Raagas</span></a></li>
                <li class="nav-item"><a href="team.php" class="nav-link"><span>Our Team</span></a></li>
                <li class="nav-item"><a href="sponsor.php" class="nav-link"><span>Sponsors</span></a></li>
                <li class="nav-item cta"><a href="competitions.php" class="nav-link">Competitions</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <?php
    
    $ch = curl_init();
 
        // set url
        curl_setopt($ch, CURLOPT_URL, "https://quickauction2019.000webhostapp.com/counter.php");
 
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
        // $output contains the output string
        $output = curl_exec($ch);
 
        //print_r($output);
        $val=substr($output,1,strlen($output)-2);
        // close curl resource to free up system resources
        curl_close($ch);  
    
    ?>
