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
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: post.php");
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



            
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="signup.php">Sign Up Now</a>
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