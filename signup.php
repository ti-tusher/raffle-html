<?php
   include ('header.php');
?>
<style>
    .products-section {
        min-height:63.5vh;
    }
</style>
<!-- products-section start -->
<section class="products-section mt-4 mb-30">
        <div class="container">
        <div class="row auth-content">
            <div class="col-sm-12 text-center">
                <h4>Sign In</h4>
                <p>Not Registered? <a class="btn-link" href="http://rafflebd.com/register">Create a new account</a></p>
            </div>
            <div class="col-sm-6">
                <div class="auth-box">
                    <form method="POST" action="http://rafflebd.com/login">
                        <input type="hidden" name="_token" value="2toS6mYbFMraigUD2Lta1v1WTKUDNfjgiuOsRqJR">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-feedback">
                                    <label class="label-text required mb-2">Phone Number OR Email</label>
                                    <input type="text" class="form-control" name="login" value="" required>
                                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>

                                                                    </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-feedback">
                                    <label class="label-text required mb-2">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                                                    </div>
                            </div>

                            
                            <div class="col-12 text-right">
                                <a href="http://rafflebd.com/password/reset">Forgot password?</a>
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-block btn-sm btn-warning">Sign In</button>
                            </div>
                        </div>
                    </form>

                    <div class="or">Or</div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="auth-box-right">
                    <div class="row">
                        <div class="col-12">
                            <a href="http://rafflebd.com/mobile/login" class="btn btn-block btn-sm button-mobile"><i class="fas fa-mobile-alt"></i> Sign In with mobile or email</a>
                        </div>
                        <div class="col-12 pt-4">
                            <a href="http://rafflebd.com/google/redirect" class="btn btn-block btn-sm button-google"><i class="fab fa-google-plus-g"></i> Sign In with google</a>
                        </div>
                        <div class="col-12 pt-4">
                            <a href="http://rafflebd.com/facebook/redirect" class="btn btn-block btn-sm button-facebook"><i class="fab fa-facebook-f"></i> Sign In with facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- products-section end -->
<?php
   include ('footer.php')
?>