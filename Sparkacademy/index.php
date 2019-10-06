<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<!-- Heading -->
<div id="heading" >
				<h1>SIGN IN</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						
									</head> 
									
									<body> 
									
										<h1 style= "color: black;"> 
											WELCOME 
										</h1> 
											
										<div class= "vertical"></div> 
									
									</body> 
									
									</html>					 
									
								<!-- Text -->
									<h3>ENTER THE CREDENTIALS</h3>
								<form method="post" action="file1.txt">
								<div class="row gtr-uniform">


									
								<div class="col-6 col-12-xsmall">
									
								<input type="text" name="name" id="username" value="" placeholder="USER NAME" required/>
									
									
								<div class="col-6 col-12-xsmall">
								<input type="password" name="name" id="password" value="" placeholder="PASSWORD" required/>
								</div>	
								</div>
								</div>
								
									<!-- Break -->
											</select>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="radio-alpha" name="radio" checked required>
											<label for="radio-alpha">Student</label>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="radio-beta" name="radio">
											<label for="radio-beta">Faculty</label>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="radio-gamma" name="radio">
											<label for="radio-gamma">Admin</label>
                                        </div>
                                        <div class="col-4 col-12-small">
                                                <input type="radio" id="radio-epsilon" name="radio">
                                                <label for="radio-epsilom">Manager</label>
                                            </div>
										
										<div class="col-6 col-12-small">
											<input type="checkbox" id="checkbox-alpha" name="checkbox">
											<label for="checkbox-alpha"><small> By clicking this you will accept the Terms and Conditions</label>
                                            </div>
                                            <button type="submit">Submit</button>
										
</html>

<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>