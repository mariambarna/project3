<?php
session_start();
if ($_SESSION["userrole"] == "admin" AND $_SESSION["Flag"] =='Running'){

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
    <link rel="stylesheet" href="../css/ahome.css">
</head>
<body>
  <div class="container-fluid">
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
    <li class="breadcrumb-item"><a href="ahome.php">Home</a></li>
    <!-- <li class="breadcrumb-item"><a href="#">Summer 2017</a></li>
    <li class="breadcrumb-item"><a href="#">Italy</a></li>
    <li class="breadcrumb-item active">Rome</li> -->
  </ul>
                      <div class="row">
                      
                      </div>
                    </div>


              
<div class="card-columns mt-5 mb-5 pt-3 ml-5 mr-5">
  
  
  <div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Dark Mode" href="aprofile.php" ><i class="fa-sharp fa-solid fa-user"></i> Profile</a> </h2> </p>
    </div>
  </div>
  
  
  
  
 
  <div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Dark Mode" href="user.php" ><i class="fa-sharp fa-solid fa-circle-info"></i>  Users</a> </h2></p>
    </div>
  </div>
  
  <div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Dark Mode" href="approve.php" ><i class="fa-sharp fa-solid fa-circle-info"></i>  Approval</a> </h2></p>
    </div>
  </div>
<div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Complain" href="aquestion.php" ><i class="fa-solid fa-message"></i>  Question</a> </h2></p>
    </div>
  </div>
  
 
  <div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Complain" href="acomplain.php" ><i class="fa-solid fa-message"></i>  Complain</a> </h2></p>
    </div>
  </div>
  
  

  <div class="card ">
    <div class="card-body text-center">
      <p class="card-text"><h2><a title="Dark Mode" href="../logout.php" ><i class="fa-solid fa-right-from-bracket"></i> Logout</a> </h2></p>
    </div>
  </div>
</div>

            </div>

        </div>
    </div>
  </div>


</body>
</html>
<?php
}
else{
  header("Location: ../index.php");
}
 ?>