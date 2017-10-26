<?php include 'partials/header.php'?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Register</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Register</h2>
	</div>
</div>
<!--login-->
    <div class="container">
        <div class="login">

            <?php if($this->session->flashdata('msg')){
                      echo "<h3>".$this->session->flashdata('msg')."</h3>";
                  }
            ?>

            <?php echo validation_errors(); ?>
            <?php echo form_open('Register/registerUser'); ?>
                <div class="col-md-6 login-do">
                    <div class="login-mail">
                        <input type="text" placeholder="Nic"  name="nic">
                        <i  class="fa fa-address-card" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Name"  name="name">
                        <i  class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Address line 1"  name="address1">
                        <i  class="fa fa-address-book-o" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Address line 2"  name="address2">
                        <i  class="fa fa-address-book-o" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Address line 3"  name="address3">
                        <i  class="fa fa-address-book-o" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Mobile"  name="mobile">
                        <i  class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Telephone"  name="telephone">
                        <i  class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="login-mail">
                        <input type="text" placeholder="Email"  name="email">
                        <i  class="glyphicon glyphicon-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Password" name="psw">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Confirm Password"  name="cpsw">
                        <i class="glyphicon glyphicon-lock"></i>
                    </div>
                    <!--<a class="news-letter " href="#">
                          <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
                        </a>-->
                    <label class="hvr-skew-backward">
                        <input type="submit" value="Submit">
                    </label>

                </div>
                <div class="col-md-6 login-right">
                    <h3>Keep in touch</h3>

                    <p>Come join with us and be one of our valueble customers and get valuable deals from us.</p>

                    <a href="login.html" class="hvr-skew-backward">Login</a>

                </div>

                <div class="clearfix"> </div>
            <?php echo form_close(); ?>
        </div>

    </div>

<!--//login-->

		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
	
	<!--//content-->
<?php include 'partials/footer.php'?>