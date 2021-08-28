<?php 
    include 'con_db.php';
?>



<!doctype html>
<html lang="en">

<head>
    <style>
        .form-box {
            margin: all;
            margin-top: 2px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            border-width: 12px;
        }
        body{
          background-image: url('back1.jpg');
        
        }

        button{
            height: 40px; width: 100px;;
        }
        button.ex2:hover{
            background-color:rgb(123, 255, 47);
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Donation</title>
</head>

<body style="background-color: sandybrown;">

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


    <br></br>
    <center>
        <div class="form-box" style="width: 600px">
            <form method="post" align="center" enctype="multipart/form-data" style="background-color: rgb(103, 207, 185)">

                <label for="exampleFormControlInput1" class="form-label"> Name </label>
                <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="--Name--">
                <label for="exampleFormControlInput1" class="form-label"> Email address </label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="--Email--">
               
                <label for="exampleFormControlInput1" class="form-label"> Amount  </label>
                <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="--Amount--">
  
            </div>
       <br></br>
    <input type="submit" name="submit" value="Submit" style="height: 50px;width: 80px;">
                <br></br>
            
    </center>

</form></div>



<?php
if(isset ($_POST["submit"]))
{
  $name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];



$q =mysqli_query($con, "select * from doantion WHERE email = '$email' ");
        $row=mysqli_fetch_array($q);
    
if($row==0){
$sql = mysqli_query($con,"INSERT INTO doantion VALUES('$name','$email','$amount')");
if($sql)
                    {
                        echo '<script>alert("Donation Done Successfully");window.location="home.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else{
    echo '<script>alert("email already presesnt");window.location="donation.php"</script>';

                        
}
}
?>



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