<?php
   if(!isset($_SESSION)){
       session_start();
   }
   
   include_once('config.php');
   include("header.php");
   
   
   if(!isset($_SESSION['valid'])){
       header("Location: login.php");
   }else{
      echo "<script> location.href='post.php'; </script>";
   }
   ?>
<section class="h-100 gradient-custom-2">
   <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col col-lg-9 col-xl-7">
            <div class="card">
               <?php 
                  if(isset($_POST['submit'])){
                      $username = $_POST['username'];
                      $email = $_POST['email'];
                      $age = $_POST['age'];
                      $phone_num = $_POST['phone_num'];
                      $designation = $_POST['designation'];
                      $image = $_FILES['Image']['name'];
                      $image_tmp = $_FILES['Image']['tmp_name'];
                      $image_folder = 'image/' . $image;
                      move_uploaded_file($image_tmp, $image_folder);
                  
                      $id = $_SESSION['id'];
                  
                      $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age', 
                      Phone_num='$phone_num', Designation='$designation', Image='$image_folder'  WHERE Id=$id ") or die("error occurred");
                  
                      if($edit_query){
                          echo "<div class='message'>
                          <p>Profile Updated!</p>
                          </div> <br>";
                          echo "<a href='home.php'><button class='btn'>Go Home</button>";
                      }
                  }else{
                      $id = $_SESSION['id'];
                      $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id ");
                  
                      while($result = mysqli_fetch_assoc($query)){
                          $res_Uname = $result['Username'];
                          $res_Email = $result['Email'];
                          $res_Age = $result['Age'];
                          $res_Phone = $result['Phone_num'];
                          $res_Desig = $result['Designation'];
                          $res_Image = $result['Image'];
                      }
                  ?>
               <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                     <img src="<?php echo $res_Image; ?>"
                        alt="Generic placeholder image" class="img-fluid img-thumbnail mt-1 mb-5 ml-3"
                        style="width: 150px; z-index: 1">
                  </div>
                  <div class="ms-3" style="margin-top: 130px; padding-bottom: 20px; padding-left: 25px;">
                     <h5><?php echo $res_Uname; ?></h5>
                     <p><?php echo $res_Desig; ?></p>
                  </div>
               </div>
               <div class="card-body p-4 text-black">
                  <div class="mb-5">
                     <h1>Profile Post</h1>
                     <div class="p-1" style="background-color: #f8f9fa;">
                        <!-- Start -->
                        <div class="col-md-12 mt-1">
                           <form accept-charset="UTF-8" action="" method="POST" enctype="multipart/form-data" target="">
                              <div class="form-group">
                                 <label for="username">User Name</label>
                                 <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name and surname" 
                                    value="<?php echo $res_Uname; ?>" required="required">
                              </div>
                              <div class="form-group">
                                 <label for="email" required="required">Email address</label>
                                 <input type="text" name="email" class="form-control" name="email" id="email" value="<?php echo $res_Email; ?>" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                 <label for="phone_num" required="required">Contact</label>
                                 <input type="text" name="phone_num" class="form-control" name="phone_num" id="phone_num" value="<?php if(isset($res_Phone)) { echo $res_Phone; } ?>" placeholder="Enter Contact">
                              </div>
                              <div class="form-group">
                                 <label for="designation" required="required">Designation</label>
                                 <input type="text" name="designation" class="form-control" name="designation" id="phone_num" value="<?php if(isset($res_Desig)) { echo $res_Desig; } ?>" placeholder="Enter Designation">
                              </div>
                              <hr>
                              <div class="form-group mt-3">
                                 <label class="mr-2">Upload your Image:</label>
                                 <input type="file" name="Image" id="Image">
                              </div>
                              <hr>
                              <button type="submit" class="btn btn-primary" name="submit">Update</button>
                           </form>
                        </div>
                        <?php } ?>
                        <!-- End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>