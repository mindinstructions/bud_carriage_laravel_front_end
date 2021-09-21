<?php include("includes/header.php"); ?>

	<div class="d-flex justify-content-center align-items-center mt-5 bud-c">
    <div class="card">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center"> <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">User Sign up</a> </li>
            <li class="nav-item text-center"> <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Business sign up</a> </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="bud-carriage-home text-center">
        <a class="form-logo" href="#"><img  src="img/Bud&Carriage-logo-B&C-1.png"></a>
        <h2 class="center bud-heading">Sign Up</h2>
         <div class="login-form">
            <input type="text" name="email" placeholder="Email">
            <input type="number" name="password" placeholder="Password">
            <input type="text" name="u-name" placeholder="User Name">
            <input type="button" name="signup" value="Sign Up">
            <div class="account-access">
            <a href="login.php">Already a member? Log in</a>
            </div>
            -or-
            <div class="social-login">
            <a href="#" class="fa fa-facebook"><span>Continue with Facebook</span></a>
            <a href="#" class="fa fa-google"><span>Continue with  Google</span></a>
            <a href="#" class="fa fa-apple"><span>Continue with  Apple</span></a>
            </div>
            <div class="account-access">
            <p>Bud&Carriage respects privacy. Names and emails aren't displayed publicly, and nothing is posted to your Facebook or Google account without permission.</p>
            </div>
            <h3 class="w-singup">Why sign up?</h3>
            <img src="img/signup-baner.jpg">
            <ul class="signup-list">
                <li>Find the best dispensary storefronts and see who delivers to you.</li>
                <li>Get updates about your favorite products, brands, and retailers.</li>
                <li>Leave reviews & share your experiences to help out the community.</li>
            </ul>
        </div>
    </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
             <div class="bud-carriage-home text-center">
        <a class="form-logo" href="#"><img  src="img/Bud&Carriage-logo-B&C-1.png"></a>
        <h2 class="center bud-heading">Sign Up</h2>
         <div class="login-form">
            <input type="text" name="email" placeholder="Email">
            <input type="number" name="password" placeholder="Password">
            <input type="text" name="u-name" placeholder="User Name">
            <input type="button" name="signup" value="Sign Up">
            <div class="account-access">
            <a href="login.php">Already a member? Log in</a>
            </div>
            -or-
            <div class="social-login">
            <a href="#" class="fa fa-facebook"><span>Continue with Facebook</span></a>
            <a href="#" class="fa fa-google"><span>Continue with  Google</span></a>
            <a href="#" class="fa fa-apple"><span>Continue with  Apple</span></a>
            </div>
            <div class="account-access">
            <p>Bud&Carriage respects privacy. Names and emails aren't displayed publicly, and nothing is posted to your Facebook or Google account without permission.</p>
            </div>
            <h3 class="w-singup">Why sign up?</h3>
            <img src="img/signup-baner.jpg">
            <ul class="signup-list">
                <li>Find the best dispensary storefronts and see who delivers to you.</li>
                <li>Get updates about your favorite products, brands, and retailers.</li>
                <li>Leave reviews & share your experiences to help out the community.</li>
            </ul>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>