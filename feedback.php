<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<div class="header">
<?php $active="home"; include('head.php'); ?>
<?php include'ticker2.php'; ?>

</div>

<div id="page-container" style="margin-top:5px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Feedback </h1>
      </div>
</div>
<form name="feedback" action="feedback_savedata.php" method="post">

<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="Number" maxlength="10" name="mobileno" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id<span style="color:red">*</span></div>
<div><input type="email" name="emailid" class="form-control" required></div>
</div>

</div>

<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Did you like website?<span style="color:red">*</span></div>
<div>
    <select class="form-control" name="like" required>
        <option value="">Select</option>
        <option>Yes</option>
        <option>No</option>
        <option>Maybe</option>
    </select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Any Improvement in website?<span style="color:red">*</span></div>
<div>
    <select class="form-control" name="improve" required>
        <option value="">Select</option>
        <option>Yes</option>
        <option>No</option>
    </select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Feedback/Suggestion</div>
<div>
    <textarea class="form-control" cols="45" rows="4" name="feedback"></textarea>
</div>
</div>

</div>

<div class="row">
  <div class="col-lg-4 mb-4">
  <div>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer" onclick="popup()">
  </div>
  </div>
</div>


</div>
</div>

<?php include('footer.php') ?>
</div>

<script>
     function popup() {
       alert("Feedback added Successfully.");
     }
</script>

</body>
</html>
