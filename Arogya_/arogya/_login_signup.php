<!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">

                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form action="index.php" method="post">
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="email" name="email" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Type here';
                                                }" required="" class="form-control">	
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" name="pword" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Password';
                                                }" required="">
                                        <!--<a href="#">Forgot password?</a>-->
                                    </div>
                                    <!--											<div class="single-bottom">
                                                                                                                                    <input type="checkbox"  id="brand" value="">
                                                                                                                                    <label for="brand"><span></span>Remember Me.</label>
                                                                                                                            </div>-->
                                    <div class="sign-in">
                                        <input type="submit" name="btnLogin" value="SIGNIN" >
                                    </div>
                                </form>
                            </div>

                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        <!-- login -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                <form action="index.php" method="post">
                                    <div class="sign-up">
                                        <h4>First Name :</h4>
                                        <input type="text" name="first_name"  required="">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Last Name :</h4>
                                        <input type="text" name="last_name" required="">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Telephone :</h4>
                                        <input type="text" name="telephone"  required="">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Date of Birth :</h4>
                                        <input type="text" name="dob"  required="">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="email" name="email" required="" class="form-control">	
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" name="pword" placeholder="min 6 chaacters"  required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password" name="repword"  id="repword" oninput="check(this)"  required="">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" name="btnRegister" value="REGISTER NOW" >
                                    </div>
                                   
                                </form>
                            </div>
                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
        
