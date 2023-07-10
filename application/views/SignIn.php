<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6" >
                    <h3><strong>Enter your information here.</strong></h3> <br>
                    <div class="login-dark">      
                        <form method="post" action="<?php echo site_url('Login/insert_user'); ?>">
                            <h2 class="sr-only">Here to signin</h2>
                            <input class="form-control" type="text" name="name" placeholder="Name"> <br> 
                            <input class="form-control" type="email" name="email" placeholder="Email"> <br>
                            <input class="form-control" type="password" name="password" placeholder="Password"> <br>
                            <input class="form-control" type="password" name="repassword" placeholder="Retype password"> <br>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit"style="background-color:red;">Sign In</button>
                            </div>
                            Have an account ? <a class="forgot" href="<?php echo site_url('Login/index'); ?>"><strong>Log In</strong></a>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pstq">
                        <img src="<?php echo base_url('assets/imgs/pastq.jpg'); ?>" alt="" width="300px" height="400px" style="margin-bottom:"70px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
