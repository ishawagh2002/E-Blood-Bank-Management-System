
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
<?php include'ticker2.php'; ?>

<center>
<br>
<h1>Choose Your Gender</h1>
<br><br>

<!-- <br>
        <a href="male.php">
        <img src="image\male.jpg" style="width: 10%;"></a>

        <a href="female.php">
        <img src="image\female.jpg" style="width: 10%;"></a>
</center> -->


          <div class="row">


            <div class="col-md-6">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color: white; border-radius:50px">
                  <div class="stat-panel text-center">
                    <div class="stat-panel-title text-uppercase" style="color: black;"><h3>Male</h3> </div>

                    <br>
                      <a href="male.php">
                        <img src="image\male.jpg" style="width: 20%; height: 300px;">
                        </a>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-md-6">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:white; border-radius:50px">
                  <div class="stat-panel text-center">
                    <div class="stat-panel-title text-uppercase" style="color: black;"><h3>Female </h3></div>
                    <br>
                    <a href="female.php">
                        <img src="image\female.jpg" style="width: 20%; height: 300px;">
                    </a>
                  </div>
                </div>
              </div>
            </div>


        </div>
      </div>
    </div>


<?php include('footer.php') ?>

</body>

</html>       


