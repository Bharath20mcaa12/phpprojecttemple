<?php 
    include 'con_db.php';
?>

<?php
if(isset ($_POST["login1"]))
{
  $username = $_POST['username'];
$password = $_POST['password'];


//        $row=mysqli_fetch_array($q);
    
//if($row==0){
$sql = mysqli_query($con,"INSERT INTO login VALUES('$username','$password')");




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
echo '<script> alert("Welcome ! This is your first visit");</script>';
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
<div align="right"> 
  <form  method="post" >
  <input type="submit" name="logout" value="Logout" style="height: 40px;width: 65px;font-size: 16px">
</form>
</div>
  <!-- top panel-->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hindus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrations.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="onlineservice.php">Online services</a>
          </li>

          <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Temple city
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="kadri.html">Mangalore</a></li>
              <li><a class="dropdown-item" href="udupi.html">Udupi</a></li>
              <li><a class="dropdown-item" href="rangapatna.html">Srirangapatna</a></li>
              <li><a class="dropdown-item" href="dk.html">Dakshina kannada</a></li>
              <li><a class="dropdown-item" href="hubli.html">Hubli</a></li>
              <li><a class="dropdown-item" href="hasan.html">Hasan</a></li>
              <li><a class="dropdown-item" href="chick.html">Chikkamagaluru</a></li>
  </ul>
</div>

&emsp;
<li class="nav-item">
  <a class="nav-link" href="photo.html">Gallery</a>
</li> 
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donation</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cont.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="benifits.html">Benifits</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Feedback</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="survey.php">Survey</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="bill.php">Bill</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

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

  <div class="card text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"><u>Donation</u></h5>
        <p class="card-text">To improve/develop the temples you can donate here ....</p>
        <a href="donation.html" class="btn btn-primary">Donate Now </a><br></br>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

   
  <br></br>
  <h1><center>Benifits of visiting Temple</center></h1>
  <div class="card-group">
    <div class="card">
      <img src="card1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Positivity Around</h5>
        <p class="card-text">
          Temple is a place where lot of people come and pray for their family wellbeing. When they start praying, they usually start with their pains and sorrows, but after sometime, they get so much of positive vibes that they slowly start forgetting about their sorrows. And when they go to their home, they are always filled with lots of positive energy.</p>
      </div>
      
    </div>
    <div class="card">
      <img src="card2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Increasing Good Deeds</h5>
        <p class="card-text">
          Temple is a place where we can donate for people who cannot afford and also feed people who are outside it. This is one of the best ways to increases our good deeds in life. Afterall, you just don???t want to be rich by money, but would also want to be rich by heart.</p>
      </div>
    
    </div>
    <div class="card">
      <img src="card3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mind Concentration</h5>
        <p class="card-text">
          Temple is a place where people usually go to pray to God. Because it has a very silent environment, you can actually learn to increase your power of concentration. You can also sit and spend some time alone and think about all good things happened to you. This way you will not just build concentration power, but would also be grateful about yourself.</p>
      </div>
      
    </div>
  </div>

<br></br>
  <!--About us -->
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="s.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">About Us</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="aboutus.html" class="btn btn-primary">View Now </a>
        
        </div>
      </div>
    </div>
</div>











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
echo '<script>alert("logout");window.location="user.php"</script>';
SESSION_unset();

}
?>