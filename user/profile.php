<?php
session_start();
if ($_SESSION["userrole"] == "user" AND $_SESSION["Flag"] =='Running'){

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>home</title>
    <script src="../jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umb/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/1e2c5a8858.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/achoose.css">
</head>
<body>
  <div class="container-fluid ba">
    <div class="row">

        <div class="container-fluid">
            <div class="container bg-light ">
                <div class="header">
                  <div class="row">
                  <div class="col-2 ml-3 mt-1">
                      <img src="../image/laa.png" alt="">
                      
                      </div>
                      <div class="col-9 ">
                      <p>National Tax Calculation, Bangladesh</p>
                      <h5>জাতীয় রাজস্ব বোর্ড, বাংলাদেশ</h5>
                    </div>
                  </div>
                  
                  
                 
                  

                    </div>
                    <div class="head">
                    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
  </ul>
                      <div class="row">
                        
                      </div>
                    </div>


              
<div class="card-deck mt-5 mb-5 pt-3 ml-5 mr-5">
      
      <div class="card ">
        <div class="card-body text-center">
          <p class="card-text"><h2><a title="Dark Mode" href="myprofile.php" ><i class="fa-solid fa-user-tie"></i>  Your Profile</a> </h2></p>
      </div>
      </div>
      <div class="card ">
        <div class="card-body text-center">
         <p class="card-text"><h2><a title="Dark Mode" href="changepass.php" ><i class="fa-solid fa-user-tie"></i>  Change Password</a> </h2></p>
      </div>
    </div>
  </div>
  
  

            </div>

        </div>
        
    </div>
    
  </div>

  <?php
include "../footer.php";

include "../footer2.php";

?>

</body>
</html>
<?php
}
else{
  header("Location: ../index.php");
}
 ?>