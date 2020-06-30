<!DOCTYPE html>
<?php include("work.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Upload Work|Originally mine</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	<style>
header{
  background:url(bg_image.jpg);
  background-size: cover;
  background-position: center;
  min-height: 300px;

}
@media screen and (max-width: 670px)
{
header{
        min-height: 200px;
	  }
}
</style>
</head>

<body bgcolor="black">

<nav class="nav-wrapper transparent" style="height: 70px;">
        <div class="container">
            <a href="homepage-html.php" class="sidenav-trigger" data-target="mobile-menu">
               <i class="material-icons">menu</i> 
            </a>
            <a href="homepage.html" class="brand-logo">
            	<img src="image/finallogo.png" style="position: relative; bottom: 5px;">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="services-html.php">Services</a></li>
                <li><a href="#achive">Achievements</a></li>
                <li><a href="#">Work Along</a></li>
                <li><a href="#">About Us</a></li>
            	<li><a href="#">Connect Us</a></li>
              &nbsp;
              &nbsp;
               <a class="btn-floating btn-large waves-effect waves-light transparent z-depth-5"><i class="material-icons">person</i></a>
            </ul>
            <i class="material-icons"></i>
            <ul class="sidenav indigo darken-4" id="mobile-menu">                
                <li><a href="services-html.php" class="white-text">Services</a></li>
                <li><a href="#" class="white-text">Achievements</a></li>
                <li><a href="#" class="white-text">Work With Us</a></li>
                <li><a href="#" class="white-text">Connect Us</a></li>
                <li><a href="#" class="white-text">About Us</a></li>
            </ul>
        </div>
    </nav><hr>
<section class="container section">
  <img src="finalimage.png" class="responsive-img">
</section>

    <div class="p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Upload Your Work</h2>
                    <form method="POST" name="myForm" action="" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Owner Name" name="name" id="name" required="true" maxlength="50">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Title of your Project" name="title" id="title" required="true" maxlength="50">
                        </div>
                          
                       

                    
                        <div class="row row-space">
                          
                                    
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">

                                        <select name="category" id="category" name="category">
                                            <option disabled="disabled" selected="selected">Category</option>
                                        <option id="Images">Images</option>
                                        <option id="Videos">Videos</option>
                                        <option id="DeveloperCorner" name="DeveloperCorner" value="DeveloperCorner">Developer's Corner</option>
                                        <option id="HandloomTextile" value="HandloomTextile">Handloom Textile</option>
                                        <option id="DomesticTextile" value="DomesticTextile">Domestic Art</option>
                                        <option id="ClayArt" value="ClayArt">Clay Art</option>
                                        <option id="Machine&Gadgets" value="Machine&Gadgets">Machine & Gadgets</option>
                                        </select>
                                        <div class="select-dropdown"></div></div>

                            
                                </div>
                            </div></div>
                             <div class="input-group">
                                <input type="file" name="fileu" id ="fileu">
                            </div>
                             <div class="input-group">
                            <textarea id="description" name="description" maxlength="500" placeholder="Description"></textarea>
                        </div>
                          
                            <br><br><br>
                       
                       
                        
                       
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" id ="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
    </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
   

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html> 