<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>

<body>

<div class="header">
<?php
$active="home";
include('head.php'); ?>
</div> 

<?php include'ticker.php'; ?>

  <div id="page-container" style="margin-top:0px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0"></li>
      <li data-target="#demo" data-slide-to="1" class="active"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <br>
    <div class="carousel-inner">
        <div class="carousel-item">
        <video src="image\carousel_vdo1.mp4" autoplay loop muted alt="" width="100%" height="600"></video>
    </div> 
        <div class="carousel-item active">
        <img src="image\1st_BloodDonor.jfif" alt="" width="100%" height="600">
      </div>

      <div class="carousel-item">
        <img src="image\blood-donation-1024x864-3.png" alt="" width="100%" height="600">
      </div>

    </div> 

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

    <br>
        <h1 style="text-align:center;font-size:40px;"><b>Welcome to E - BloodBank & Donor Management System</b></h1>
    <br>

        <div class="col">
            <div class="col-lg-16 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">The need for blood</h4>

                        <!-- <p class="card-body overflow-auto" style=" width:1080px; text-align:center;  margin-left: 20px;"> -->

                        <!-- <p class="card-body overflow-auto" style="height:20px; margin-top: 0px; margin-left: 5px;"> -->
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         <!-- </p> -->
                </div>
            </div>
            <div class="col-lg-16 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Donation Tips</h4>

                    <!-- <p class="card-body overflow-auto" style="padding-left:2%;height:140px;width:1080px;text-align:left;"> -->
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     <//p>

                        </div>
            </div>
            <div class="col-lg-16 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>
<!-- 
                    <p class="card-body overflow-auto" style="padding-left:2%; height:0px; width:100%;text-align:center; "> -->
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     <!-- </p> -->


                        </div>
            </div>
</div>

        
<br>

      <div class="row">
        
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
              <!-- <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#D6EAF8; border-radius:50px">
                  <div class="stat-panel text-center"> -->

                    <?php
                      $sql =" SELECT * from donor_details ";
                      $result=mysqli_query($conn,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);
                    ?>

                    <center>
                    <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">Blood Donors Available </div>
                    <br>
                      <button class="btn btn-danger" onclick="window.location.href = 'home_donor_list.php';">
                        View More <i class="fa fa-arrow-right"></i>
                      </button>
                    </center>

                  <!-- </div>
                </div>
              </div> -->
            </div>

    </div>

<br>
        <!-- /.row -->
<br>

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="col-lg-6"><br>               
                <center><img class="img-fluid rounded" src="image\img2.jpg" alt="" width="400"></center>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            
            <div class="col-md-4">
                <br>
                <!-- <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color:#7FB3D5;color:#273746 ">Become a Donor </a> -->
                <img class="img-fluid rounded" src="image\img3.jpg" alt="" >
            </div>

            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
        </div>

    </div>
  </div>
  
  <?php include('footer.php');?>
</div>

</body>

</html>
