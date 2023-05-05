<html>
<head>
  <style>
  #footer {

  position:absolute;
  left: 0;
  bottom:0;
  width: 100%;
  height: 85px;
  background-color:white;
  color:black;
  line-height: 1.6;
  font-size: 16px;
}
  </style>
</head>
<body>
  <div id="footer" >

  <?php
          include 'conn.php';
          $sql= "select * from contact_info";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>

  
  <b><center>
  
  <u>Contact Details</u>
  <br>
  Address :<?php echo $row['contact_address']; ?>
  <br>
  Contact Number :<?php echo $row['contact_phone']; ?>
  <br>
  Email: <a href="#"><?php echo $row['contact_mail']; ?></a>

  </center>
  </div>


<?php }
      } ?>

</body>

</html> 