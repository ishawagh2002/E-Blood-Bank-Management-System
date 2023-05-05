<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color:white;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#cfd914 ;
}

/* Style the header links */
.header a {
  float: left;
  color: #b51626;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 25px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 35px;
  font-weight: bold;
  color:#b51626  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}


/* Float the link section to the right */
.header-right {
  float: right;
  font-size: 10px;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
/*background: black;*/
color: black;
border-radius:50px;
}
a.logo2{
  background-color: #000 ;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>> E-Blood Bank Management
    </a>
    
    <div class="header-right">
    
    <a href="guidelines.php">Guidelines</a>
    <a href="eligibility.php">Eligibility Test</a>
    <a href="search_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
    <a href="feedback.php" <?php if($active=='contact') echo "class='act'"; ?>>Feedback</a>
    <a href="admin/login.php" <?php if($active=='contact') echo "class='act'"; ?>>Admin Login</a>

    </div>
  </div>

</body>
</html>
