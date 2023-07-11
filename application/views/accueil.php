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
                    <a class="nav-link" href="#about">Your Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Service">Services</a>
                </li>   
            </ul>
            <a class="navbar-brand m-auto" href="">
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
                    <a class="nav-link" href="<?php echo site_url('control_acceuil/index'); ?>">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
        <!-- header -->
        <header id="home" class="header_gain">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">HealthActive</h1>
            <h2 class="display-4 mb-5">Stay healthy &amp; Robust</h2>
            <a class="btn btn-lg btn-primary" href="#gallary" onclick="scrollToSection()">View Your Wallet</a>
        </div>
    </header>
    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4" style="text-align:center;"><Strong>Enter your information here.</Strong></h2> 
                        <?php echo isset($error) ? $error : ''; ?>  
                        <form method="post" action="<?php echo site_url('Login/completion_user'); ?>">
                           <div class="form-group">
                            <select class="form-control" name="genre">
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                            </select>
                             </div>
                            <div class="form-group"><input class="form-control" type="number" name="poids" ></div>
                            <div class="form-group"><input class="form-control" type="number" name="taile"  ></div>
                            <div class="form-group">
                            <select class="form-control" name="choice">
                                <option value="0">Augmenter du poids</option>
                                <option value="1">Perdre du poids</option>
                                <option value="2">Atteindre son IMC ideal</option>
                            </select>
                             </div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Valider</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION WALLET -->
    <section id="targetSection">
        <div class="row">
            <div class="row justify-content-center" >
                <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4" style="text-align:center;margin-left:160px;width:300px">Your Wallet</h2> <br> 
                        <?php echo isset($error) ? $error : ''; ?> 
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <h3 style="width:200px;margin-left:220px"><Strong>TOTAL : $69</Strong></h3> <br> <br>
                            <div class="form-group"> 
                                <a href="<?php echo site_url('Purchase/index'); ?>"><button class="btn btn-primary btn-block" type="submit"style="width:250px;margin-left:200px">Purchase</button></a> 
                            </div>
                    </div>
                </div>
            </div>
            <div style="float:right;">
                <h3><strong>You can buy codes from our shop by clicking on "Purchase".</strong></h3>    
            </div>
        </div>
    </section>

    <script>
        function scrollToSection(){
            var section = document.getElementById('targetSection');
            section.scrollIntoView({behavior: 'smooth'});
        }
    </script>

	<!-- core  -->
    <script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>

</body>
</html>
