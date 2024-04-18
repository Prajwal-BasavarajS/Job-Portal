<?php


?>

<!-- Modal -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="modal fade" id="myEmployerModal" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel" style="background-image:url('img/siginBack.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background-image: url(img/bgbg.png); box-shadow: 10px 10px 20px #1e1e1e;">
      <div class="modal-header">
          <button id="empSignInCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myEmployerModalLabel">SignIn</h4>
      </div>
      <div class="modal-body"> 
					
        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					
            
                <p class="fieldset">
						<label class="image-replace cd-email" for="eemail">E-mail</label>
                                                <input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="epass">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<div id="loginresult" style="display:none;">Error message here!</div>
					</p>

					
                                        <input type="hidden" id="currentPage" name="currentPage" value="<?php echo $_SERVER['PHP_SELF']; ?>"
					<p class="fieldset">
                                            <input id="loginsubmit" class="full-width" type="submit" name="loginsubmit" id="login" value="Login">
					</p>
				</form>
				
            <p class="cd-form-bottom-message">
                <button id="regNowBtn" class="btn btn-default"  data-toggle="modal" data-target="#empsignup"  style="color: brown;" >
                                Register Now</button></p>
<button id="regEmpModalBtn" style="display:none;"  data-toggle="modal" data-target="#empsignup" >
                                </button>                                
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>
      </div>
      <div class="modal-footer">
     
       
      </div>
    </div>
  </div>
</div> 
<div class="modal fade" id="empsignup" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image: url(img/bgbg.png); box-shadow: 10px 10px 20px #1e1e1e;">
      <div class="modal-header">
        <button id="signUpCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myEmployerModalLabel">New Account</h4>
      </div>
      <div class="modal-body">
 	<div id="cd-empsignup"> <!-- sign up form -->
            <div id="result" style="display:none;"></div>
            
            <div class="container">

                <ul class="nav nav-tabs" style="width: 40%;">
    <li class="active"><a data-toggle="tab" href="#home">Employer Register</a></li>
    <li><a data-toggle="tab" href="#menu1">jobseeker Register</a></li>
   
  </ul>

  <div class="tab-content">
      <div id="home" class="tab-pane fade in active" style="width: 50%;">
      <h3>Register as employer</h3>
      <form class="cd-form" method="post" action="registerEmployer.php" enctype="multipart/form-data">
					<p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">Username</label>
						<input class="full-width has-padding has-border" id="name" name="name" type="text" placeholder="Username">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="empsignup-email">E-mail</label>
                                                <input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="empsignup-password">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						
					</p>
                                        
                                        <p class="fieldset">
						<label class="image-replace cd-password" for="logo">Logo</label>
                                                <input class="full-width has-padding has-border" id="logo" name="logo" type="file">
						
						
					</p>
                                    

					
                                        
                                       
					<p class="form-group">
                                            <button id="regsubmit" class="full-width has-padding btn-success"  style="padding:10px; box-shadow: 0px 0px 20px #156785;">Create account</button>
					</p>
                                       
				</form>

    </div>
    <div id="menu1" class="tab-pane fade"  style="width: 50%;">
      <h3>Register as job seeker</h3>
      <form class="cd-form" method="post" action="registerJobseeker.php" enctype="multipart/form-data">
					<p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">Username</label>
                                                <input class="full-width has-padding has-border" id="name" name="name" type="text" placeholder="Username">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="empsignup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="empsignup-password">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
					
					</p>
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">Qualification</label>
						<input class="full-width has-padding has-border" id="qlf" name="qlf" type="text" placeholder="Qualification">
						
					</p>
                                        <p class="fieldset">
                                            <label class=" cd-username" for="empsignup-username" style="color: white;">Date of Birth</label>
                                            <input class="full-width has-padding has-border" id="dob" name="dob" type="date" placeholder="date of birth">
						
					</p>
                                         <p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">skills</label>
                                                <input class="full-width has-padding has-border" id="skills" name="skills" type="text" placeholder="skills">
						
					</p>
                                        
                                         <p class="fieldset">
						<label class="image-replace cd-password" for="resume">Upload Resume:</label>
                                                <input class="full-width has-padding has-border" id="resume" name="resume" type="file">
						
						
					</p>
                                       
					<p class="form-group">
                                            <button id="regsubmit" class="full-width has-padding btn-success" style="padding:10px; box-shadow: 0px 0px 20px #156785;">Create account</button>
					</p>
                                       
				</form>

    </div>
    
    
  </div>
</div>
            
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-empsignup -->

		
     
    </div>
  </div>
</div></div>


<div><button id="regEmpSuccessSubmit" data-toggle="modal" data-target="#regEmpSuccess" style="display: none">Success Message</button></div>



  <!-- Success Modal -->
  <div class="modal fade" id="regEmpSuccess" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button id="empSignInCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myEmployerModalLabel"> Registration Successful! </h4>
      </div>
      <div class="modal-body">
        <div id="cd-login">
                    
                       
                        <br><span>Login to continue</span>
                    
						
                            
                            
                            <div class="center-block">
                              <button id="cancelEmpregModal" type="button" class="btn btn-default" data-dismiss="modal"  style="width: 150px;">Done</button>   
                              </div>
							
                                 
                         
                  
			 
		</div>
        </div>
    </div>
</div>
  </div> 
  
  
  
  
  
  <script src="js/registerUser.js"></script>	
