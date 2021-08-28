<?php
include 'con_db.php';
?>

<html>
<head>
    <title></title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: black;color: yellow;">
    <br>
    <br><br>

    <center>
            <h1>Online Seva</h1>
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <thead>
                                            <tr>
                                                    <th>Sl.no</th>
                                                    <th>Name</th>
                                                <th>Email</th>
                                                  <th>favouritetemple</th>
                                              <th>city</th>
                                                <th>speciality</th>
                                                   <th>services</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM survey ");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                 
                                                    <td ><?php echo $row['name'];  ?></td>
                                                <td ><?php echo $row['email'];  ?></td>
                                                <td><?php echo $row['favouritetemple'];  ?></td>
                                                     <td ><?php echo $row['city'];  ?></td>
                                                          <td ><?php echo $row['speciality'];  ?></td>
                                                          <td ><?php echo $row['services'];  ?></td>
                                                
                                               
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
    </table>
</form>
<a href="admin.php" class="btn btn-dark text-white">Back</a>
    </center>
</body>
</html>
