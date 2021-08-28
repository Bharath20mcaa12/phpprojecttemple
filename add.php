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
            <h1>Feedback Store</h1>
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <thead>
                                            <tr>
                                                <th>Sl.no</th>
                                                <th>Email</th>
                                                <th>Comment</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM contact ORDER BY email ASC");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                
                                                <td ><?php echo $row['email'];  ?></td>
                                                <td><?php echo $row['comment'];  ?></td>
                                                
                                               
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
    </table>
</form>
<a href="contact.php" class="btn btn-dark text-white">Back</a>
    </center>
</body>
</html>
