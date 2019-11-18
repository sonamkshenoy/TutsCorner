<?php include("header.php");
include("config/db_connect.php");

if(isset($_POST['login'])){
  // echo $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT email,password FROM allentries WHERE email='$email'";

  $result = mysqli_query($conn,$sql);
  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
  if($password == $students[0]['password']){
    echo 'Login successful! Congrats!';
    
  }
  else{
    echo 'Login unsuccessful. Please enter correct credentials';
  }
}

if(isset($_POST['signup'])){
  // echo $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql="INSERT INTO allentries(name,email,password) VALUES('$name','$email','$password')";
  if(mysqli_query($conn, $sql)){
    echo "Hey $name! You have signed up successfully!";
  }
  else{
    echo "Please try again!". mysqli_error($conn);
  }
}



 ?>

<!--  Add your content from here -->


          <div style="text-align: center;" class="container">
            <button id='loginbutton' type="button" name="button">Login</button>
            <button id='signupbutton' type="button" name="button">Sign Up</button>
          </div>

          <div class="tab-content py-5 border border-primary">
            <div  id="login">
              <div class="main-w3layouts wrapper">
            		<h1>Login</h1>
            		<div class="info">
            			<div class="top">
            				<form action="#" method="post">
            					<!-- <input class="text" type="text" name="username" placeholder="Username" required=""> -->
            					<input class="text email" type="email" name="email" placeholder="Email" required="">
            					<input class="text" type="password" name="password" placeholder="Password" required="">
            					<div class="wthree-text"><br>
            						<label class="anim">
            							<!-- <span>I Agree To The Terms & Conditions</span> -->
            						</label>
            					</div>
            					<input type="submit" name='login' value="LOGIN">
            				</form>
            				<!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->
            			</div>
            		</div>
              </div>
            </div>
            <div style = "display:none;" id="register">
              <div class="main-w3layouts wrapper">
            		<h1>Sign up</h1>
            		<div class="info">
            			<div class="top">
            				<form action="#" method="post">
                      <input class="text" type="text" name="name" placeholder="Your Full Name" required=""><br>
            					<input class="text" type="text" name="Username" placeholder="Username" required="">
            					<input class="text email" type="email" name="email" placeholder="Email" required="">
            					<input class="text" type="password" name="password" placeholder="Password" required="">
            					<input class="text pass" type="password" name="password" placeholder="Confirm Password" required="">
                      <input class="text email" type="number" name="age" placeholder="Age" required="">
            					<div class="wthree-text">
            						<label class="anim">
            							<input type="checkbox" class="checkbox" required="">
            							<span>I Agree To The Terms & Conditions</span>
            						</label>
            						<div class="clear"> </div>
            					</div>
            					<input type="submit" name='signup' value="SIGNUP">
            				</form>
            				<!-- <p>Don't have an Account? <a href="#register"> Login Now!</a></p> -->
            			</div>
            		</div>
              </div>
            </div>
          </div>


<!--  Stop your content  here -->
 <script type="text/javascript">
 $(function(){
   $('#loginbutton').on('click', function(e){
     e.preventDefault();
     $("#login").show();
     $('#register').hide();
   });
   $('#signupbutton').on('click', function(e){
     e.preventDefault();
     $("#login").hide();
     $('#register').show();
   });
 });
 </script>

 <?php include("footer.php") ?>
