<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>HomePage</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/animate/animate.css'); ?>">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css'); ?>">
    <link rel="shortcut icon" href="<?php  echo base_url('assets/imgs/sary.png'); ?>" type="image/x-icon">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Service">Services</a>
                </li>   
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="<?php echo base_url('assets/imgs/sary.png'); ?>" class="brand-img" alt="">

            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">HealthActive</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Your Profile</h2> <br> <br>
                        <?php echo isset($error) ? $error : ''; ?>  
                        <form method="post" action="<?php echo site_url('Login/completion_user'); ?>">
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <div class="form-group"><input class="form-control" type="text" name="genre"></div>
                            <div class="form-group"><input class="form-control" type="number" name="poids" ></div>
                            <div class="form-group"><input class="form-control" type="number" name="taile"  ></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">valider</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <!-- <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL US</h3>
                <P class="text-muted">info@website.com</P>
            </div>
            <div class="col-sm-4">
                <h3>CALL US</h3>
                <P class="text-muted">(123) 456-7890</P>
            </div>
            <div class="col-sm-4">
                <h3>US</h3>
                <P class="text-muted">ETU1924 ANDRIAKOTOHARISON Irina</P>
                <p class="text-muted">ETU1935 ANDRIANARIMALALA RINDRA NY AIKO ANTONIO</p>
                <p class="text-muted">ETU2081 REALY Mark Arivony</p>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div> -->
    <!-- end of page footer -->

	<!-- 
</body>
</html>
