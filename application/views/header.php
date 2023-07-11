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