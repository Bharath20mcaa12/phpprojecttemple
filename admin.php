<?php
if(isset ($_POST["login"]))
{

if(($_POST['username']!="admin")&&($_POST['password']!="admin"))
{
echo '<script> alert("Fraud! You are not an admin");window.location="loginnew.php"</script>';
}
        session_start();
        
if(($_SESSION["user_name"]==$_POST['username']) && ($_SESSION["password"]=$_POST['password']) && ($_SESSION["count"]>=1))
{
$_SESSION['count'] += 1;
echo "Welcome back "
.$_SESSION["user_name"]. " <br> You have logged in ".$_SESSION['count'] ." times" ;
}
else 
{

$_SESSION["user_name"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
echo "Hello ".$_SESSION["user_name"];
$_SESSION['count'] = 1;
echo '<script> alert("This is your first visit");</script>';
} 
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Temple</title>
</head>

<body>

  <!-- top panel-->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hindus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Online services</a>
          </li>

          <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Temple city
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Mangalore</a></li>
              <li><a class="dropdown-item" href="#">Udupi</a></li>
              <li><a class="dropdown-item" href="#">Srirangapatna</a></li>
              <li><a class="dropdown-item" href="#">Dakshina kannada</a></li>
              <li><a class="dropdown-item" href="#">Hubli</a></li>
              <li><a class="dropdown-item" href="#">Hasan</a></li>
              <li><a class="dropdown-item" href="#">Chikkamagaluru</a></li>
  </ul>
</div>

&emsp;
<li class="nav-item">
  <a class="nav-link" href="#">Gallery</a>
</li> 
          <li class="nav-item">
            <a class="nav-link" href="#">Donation</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Benifits</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Feedback</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Survey</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Bill</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

<div align="right"> 
  <form  method="post" >
  <input type="submit" name="logout" value="Logout" style="height: 40px;width: 65px;font-size: 16px">
</form>
</div>


  <!-- Image-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="s.jpg" class="d-block w-100" alt="no image" >
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="no image" >
      </div>
      <div class="carousel-item">
        <img src="5.jpg" class="d-block w-100" alt="no image"  >
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="no image" >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br></br>

  <center>
<form method="post" >
<a role="button" class="btn btn-dark" href="viewregistration.php"> View Registration</a> 
<a role="button" class="btn btn-dark" href="viewonlineseva.php"> View Online Seva</a> 
<a role="button" class="btn btn-dark" href="viewpayment.php"> View Donation</a>
<a role="button" class="btn btn-dark" href="viewsurvey.php"> View Survey </a>  
<a role="button" class="btn btn-dark" href="viewfeedback.php"> View Feedback </a>  
<a role="button" class="btn btn-dark" href="viewuser.php"> View Login </a>  
</form>
</center>


<br><br><br>







  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
if(isset ($_POST['logout'])){
$_SESSION['count'] = 0;
echo $_SESSION["user_name"]=$_POST['username']; 
echo '<script>alert("logout");window.location="loginnew.php"</script>';
SESSION_unset();

}
?>
