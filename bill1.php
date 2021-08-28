<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $don = $_POST['don'];
        $amount = $_POST['amount']; 
    }
?>

<html>
<head>
    <title></title>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <div id="main">
        <form method="post" action="bill2.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center">$$** BILL **$$</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name" value=<?php echo $name?> ></th>
        </tr>
        <tr>
            <th>Donation Type: </th><th><input type="radio" name="don" value="management" <?php if($don=="management"){ echo "checked";}?>>management<input type="radio" name="don" value="trust" <?php if($don=="trust"){ echo "checked";}?>>trust<input type="radio" name="don" value="development"  <?php if($don=="development"){ echo "checked";}?>>development</th>
        </tr> 
        <tr>
            <th>Amount</th><th><input type="text" name="amount" value=<?php echo $amount?> ></th>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit" disabled=""></th>
        </tr> 
    </table>
<?php
date_default_timezone_set('Asia/Calcutta'); 
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60  + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit was - ". $visit;
setcookie('name',$name, $inTwoMonths);
setcookie('don',$don, $inTwoMonths);
setcookie('amount',$amount, $inTwoMonths);
}
else
echo "Cookie Has Been Set!!";
setcookie('name',$name, $inTwoMonths);
setcookie('don',$don, $inTwoMonths);
setcookie('amount',$amount, $inTwoMonths);
?>
<p>Press <input type="submit" name="submit" value="Go">to view the contents</p>
</div>

    </form>
    </center>
</body>
</html>