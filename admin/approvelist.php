<?php

if ($_SESSION["userrole"] == "admin" AND $_SESSION["Flag"] =='Running'){

?>
<style>
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    table{
        color: black;
        margin-top:25px;
        margin-left:5px;
       
    }
    h2{
        color: black;
        text-transform: capitalize;
    font-size: 45px;
    color:rgb(165, 70, 63);
margin-left: 420px;

margin-top:20px;
    }
    /* .pic{
        height:200px ;
        width: 200px;

    } */
    td img{
        height: 60px;
        width: 60px;

    }
.col-12{
  
padding-left: 2%;
  width: 100%;
}

    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
  

</style>
<?php

 
  $sql=" SELECT * FROM `user` WHERE Status = 'pending' AND userrole ='user'";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h2 align="center">Registration list</h2>
  <!-- <div class="col-12">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  </div> -->

  <table class="table table-sm"  width="95%">
      <tr>
          <th>NIDNO</th>
          
          <th>Name</th>
          <th>Fathers Name</th>
          <th>Mothers Name</th>
          <th>DateofBirth</th>
          <th>Address</th>
          <th>PhoneNumber</th>
          <th>Image</th>
          <th>PlaceofBirth</th>
          
          <th>Action</th>
         
         



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["NIDNO"] ?></td>
          <td><?php echo $row["Name"] ?></td>
                  <td><?php echo $row["FathersName"]?></td>
                  <td><?php echo $row["MothersName"] ?></td>
                  <td><?php echo $row["DateofBirth"] ?></td>
                 
                  <td><?php echo $row["Address"] ?></td>
                  <td><?php echo $row["PhoneNumber"] ?></td>
          <td> <img src="../<?php echo $row["Image"] ?>" alt=""></td>
              
          <td><?php echo $row["PlaceofBirth"] ?></td>
              
                 
                  <td><a class="btn btn-sm btn-success" href="approveserver.php?id=<?php echo $row["NIDNO"] ?>">Approve</a><a href="cancelowner.php?id=<?php echo $row['NIDNO'] ?>" class="btn btn-danger btn-sm">Cancel</a></td>


                






              </tr>

          <?php


          }
          ?>
  </table>
  
<?php
}
else{
  header("Location: ../index.php");
}
 ?>