<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Transfer</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/iofrm-theme2.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="<?php echo base_url(); ?>images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Palakkad Police Online Transfer Portal</h3>
                        <p>Login to access the portal</p>
                        <div class="page-links">
                            <a href="<?php echo base_url(); ?>index.php/users/login" class="active">Login</a><a href="<?php echo base_url(); ?>index.php/users/registration">Register</a>
                        </div>
                        <?php
                            if(!empty($success_msg)){
                                echo '<p class="statusMsg">'.$success_msg.'</p>';
                            }elseif(!empty($error_msg)){
                                echo '<p class="statusMsg">'.$error_msg.'</p>';
                            }
                            ?>
                        <form  action="" method="post">
                            
                            <input class="form-control" type="text" name="email" placeholder="Email" required=""value="">
                            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                            <input class="form-control" type="password" name="password" placeholder="Password" required="">
                            <!--input type="checkbox" id="chk1"><label for="chk1">Remmeber me</label-->
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="loginSubmit" value="submit">Login</button>
                            </div>
                        </form>
                        <!--div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>