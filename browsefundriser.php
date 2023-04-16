<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("LOCATION: signup.php");
    exit;
}
?>
<!DOCTYPE html>

<html>
<title>Browse Fund</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="browsefundriser.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- navbar -->
  <section id="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to top,#33ccff,#e6f9ff)";>
        <a class="navbar-brand" href="assignment.php"><img class="rounded" src="logo1.png" alt="logo" height="50px" width="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto pr-4" id="con">
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="browsefundriser.php" id="text1">Browse Fundarise</a>
            </li>
            <li class="nav-item  pr-4">
              <a class="nav-link font-weight-bold" href="fundarisefor.php"  id="text2">Fundarise For</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="con">
            <li class="nav-item dropdown">
              <a class="btn btn-link btn btn-primary btn-lg active font-weight-bold nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-pressed="true" style="color:white;">
                <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    </div>
   
    <div class="row">
       <div class="col-md-10 text-center ">
       
               <div class="row">
                <!--fetching cards from data base-->
               <?php 
                  include 'dbconnect.php';
                  $sql = "SELECT * FROM admin_post";
                  $result = mysqli_query($conn, $sql);
                  while ($row=mysqli_fetch_assoc( $result)) 
                  {
                    $title = $row['title'];
                    $photo1 = $row['photo1'];
                    $money_raise = $row['money_raise'];
                    $category=$row['category'];
                    echo 
                    "
                    <div class='col-md-4 mb-2'>
                    <div class='card border-primary rounded' style='width: 18rem';>
                    <img class'card-img-top' src='./images/$photo1' alt='$title'>
                    <div class='card-body'>
                     <h5 class='card-title text-center'>$title</h5>
                    <p class='card-text font-weight-bold'>₹ $money_raise</p>
                    <a href='login.php'><button type='button'  class='btn btn-primary btn-lg '>Donate</button></a>
                     </div>
                     </div>
                    </div>
                    
                    ";
                  }
        
        
                   ?>
         
                
               </div>
       </div>
       <div class="col-md-2 p-0 text-center">
        <ul class="navbar-nav me-auto">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light" id= "cat"><h3>Categories</h3></a>
          </li>
          <li class="nav-item"  id="d" >
            <a href="#" class="nav-link" >Destruction</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"   >Education</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Animals</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Medical</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Creative</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Enviorment</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Children</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Development</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Food</a>
          </li>
          <li class="nav-item" id="d" >
            <a href="#" class="nav-link"  >Others</a>
          </li>
          
        </ul>
          
       </div>


 

  </body>
</html>