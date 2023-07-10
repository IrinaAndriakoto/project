
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
    <script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>

