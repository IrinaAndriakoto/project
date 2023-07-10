<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/imgs/sary.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css');?>">
</head>

<body>
    <div class="container">
    <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url('assets/imgs/sary.png'); ?>" alt="vsr" class="sary"><h3> Welcome to <strong style="color:red">HealthActive</strong></h3> <br>
                <img src="<?php echo base_url('assets/imgs/login.jpg'); ?>" alt="" width="400px">
            </div>
            <div class="col-md-4">   
                <div class="login-dark">
                    <form method="post" action="<?php echo site_url('Login/process'); ?>">
                        <h3><strong>Here to login</strong></h3> <br>
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Email" required></div>
                        <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password" required></div> <br>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:red;">Log In</button></div>
                        <p>Click <a class="forgot" href="<?php echo site_url('Login/signin'); ?>">here</a> to create a new account.</p>
                    </form>
                </div>
            </div>
    </div>
    </div>
        
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>

</html>