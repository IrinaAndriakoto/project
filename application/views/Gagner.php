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
        <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Vous voulez gagner du poids !</h1>
            <h2 class="display-4 mb-5">D'après les données que vous avez fournis, nous vous proposons le régime ci-dessous :</h2>
        </div>
    </header>

   
<!-- <h3>Votre IMC :  </h3> -->
        <div>
            <table border=1>
                <tr id="jour">
                    <td></td>
                    <td>Lundi</td>
                    <td>Mardi</td>
                    <td>Mercredi</td>
                    <td>Jeudi</td>
                    <td>Vendredi</td>
                    <td>Samedi</td>
                    <td>Dimanche</td>
                </tr>
                <tr id="matin">
                    <td>Matin</td>
                    <td>Oeufs brouillés au fromage + toast + verre de lait entier</td>
                    <td>Flocons d'avoine avec du lait entier + miel + tranches de bananes</td>
                    <td>Pancakes + miel + oeufs brouillés + verre de lait entier</td>
                    <td>Burrito + oeufs brouillés + fromage</td>
                    <td>Omelette aux légumes + toast + verre de lait entier</td>
                    <td>Céréales avec lait entier + tranches de bananes</td>
                    <td>Pancakes + baies + chantilly + oeufs brouillés + verre de lait entier</td>
                </tr>
                <tr id="midi">
                    <td>Midi</td>
                    <td>Blanc de poulet grillé + riz + légumes cuit à la vapeur + salade</td>
                    <td>Beef burger avec fromage + avocat + patate de douce frite</td>
                    <td>Salade de thon + tortilla + légumes</td>
                    <td>Brochettes de crevettes grillées + quinoa + légumes</td>
                    <td>Blanc de poulet cuit au four + riz + légumes rôtis + salade</td>
                    <td>Poulet grillé + quinoa + avocat</td>
                    <td>Dinde + tortilla + légumes + avocat + salsa</td>
                </tr>
                <tr id="soir">
                    <td>Soir</td>
                    <td>Saumon cuit au four + quinoa + patate douce rôtie + broccoli cuit à la vapeur</td>
                    <td>Steak grillé + purée de pomme de terre + légumes sautés</td>
                    <td>Cuisses de poulet cuit au four + riz + salade</td>
                    <td>Morue cuit au four + couscous + aspèrges rôties + salade</td>
                    <td>Boeuf sauté aux légumes + riz</td>
                    <td>Saumon cuit au four + purée de patate douce + épinards sautés + salade</td>
                    <td>Steak grillé + pomme de terre rôtie + aspèrges grillées + salade</td>
                </tr>
                <tr id="sport">
                    <td></td>
                    <td>5km de course</td>
                    <td>50 pompes</td>
                    <td>50 squats</td>
                    <td>50 abdos</td>
                    <td>10km de vélo</td>
                    <td>30min de corde à sauter</td>
                    <td>30min de marche</td>
                </tr>
            </table>
        </div>
        <br>
        <h4>
            Gardez en tête de bien ajuster les portions selon vos besoins spécifiques. N'oubliez surtout de faire du sport pour maintenir 
            votre physique et votre santé.
        </h4>
