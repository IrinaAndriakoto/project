
    <!-- header -->
    <header id="home" class="header">
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
                        <h2 class="mb-4" style="text-align:center;">You</h2> <br> 
                        <?php echo isset($error) ? $error : ''; ?>  
                        <form method="post" action="<?php echo site_url('Login/completion_user'); ?>">
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <p>GENDER :</p>
                            <div class="form-group">
                                <select name="genre" class="form-control">
                                    <option value="#"></option>
                                    <option value="">MALE</option>
                                    <option value="">FEMALE</option>
                                    <option value="">OTHER</option>
                                </select>
                            </div>
                            <p>HEIGHT :</p>
                            <div class="form-group"><input class="form-control" type="number" name="poids" ></div>
                            <p>WEIGHT :</p>
                            <div class="form-group"><input class="form-control" type="number" name="taile"  ></div> <br>
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
                        <form method="post" action="<?php echo site_url('Login/completion_user'); ?>">
                            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                            <h3 style="width:200px;margin-left:220px"><Strong>TOTAL : $69</Strong></h3> <br> <br>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"style="width:250px;margin-left:200px">Purchase</button></div>
                        </form>
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
    <script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>

