<?php 
   session_start();
   
   include_once('config.php');
   include("header.php");
?>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{
          

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
            
<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100 mt-20">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-lg-9 col-xl-7 mt-5">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #343a40; height:60px;">
            
            <div class="ms-3" style="margin-top: 0px; margin-left: 250px;">
              <h1>Login</h1>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
            <div class="p-1" style="background-color: #f8f9fa;">


            
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>







                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>