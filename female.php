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
<?php include'ticker2.php'; ?>

</div> 
<div id="page-container" style="margin-top:5px; position: relative;min-height: 100vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:100px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-8 mb-3">Fill Your Information </h1>
      </div>
</div>

<form name="donor" action="" method="post">

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic" >Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic" >Age<span style="color:red">*</span></div>
<div><input type="number" name="age"  class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"  >Weight in Kg<span style="color:red">*</span></div>
<div><input type="number" name="weight" class="form-control" required></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic"  >Height in Feet</div>
<div>
    <select class="form-control" name="height">  
    <option value="">Select</option>
    <option value="Below 4">Below 4</option>
    <option value="4 - 5">4 - 5</option>
    <option value="5 - 6">5 -6 </option>
    <option value="Above 6">Above 6</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"  >Any Medical History like(Dibetes, Jaundice, Malaria) in last 3 months<span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"  >Any Medication since last 2 weeks<span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic" >Had any Tatoo or Piercing in last 6 Months<span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic" >As per your knowledge your Haemoglobin level<span style="color:red">*</span></div>
<div><input type="number" name="haem"  class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"  >Have ever had a positive test for HIV (AIDS virus)<span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic" >Have ever injected Recreational Drugs <span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic" >Have you ever been Pregnant <span style="color:red">*</span></div>
<div><select class="form-control" name="been">
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic"  >Last Pregnancy(In years)<span style="color:red">*</span></div>
<div><input type="number" name="yrs"  class="form-control" required>
</div>
</div>
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic"  >Last Periods(In weeks)<span style="color:red">*</span></div>
<div><input type="number" name="week"  class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic" >Are You Breastfeeding <span style="color:red">*</span></div>
<div><select class="form-control" name="any" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic" >Are Your Periods Regular <span style="color:red">*</span></div>
<div><select class="form-control" name="are" required>
<option value="">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
</div>
</div>





<div class="row">
  <div class="col-lg-2 mb-2">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
  </div>
</div>
</div>

<?php
    if(isset($_POST['submit']))
    {
        $age=$_POST['age'];
        $weight=$_POST['weight'];
        $height=$_POST['height'];
        $any=$_POST['any'];
        $haem=$_POST['haem'];
        $yrs=$_POST['yrs'];
        $week=$_POST['week'];
        $are=$_POST['are'];
        if($age>=16 && $age<=60 && $weight>=50 && $weight<=90 && $any=='No' && $haem>=13 && ($yrs==0 || $yrs>=2) && $week>=2 && $are=='Yes')
        {
            echo'<script type="text/javascript">
                  var answer=confirm("You are eligible for blood donation.....Continue for Registration??")
                  if(answer)
                  window.location="donate_blood.php";
                  </script>';
            exit;



        }
        else
        {
            // echo"Your not eligible";
            echo '<script type="text/javascript">

                 window.onload = function () { alert("Your not eligible"); }

                    </script>';
        }
    }
?>
</div>
  
  <?php include('footer.php');?>
</div>



</body>
</html>