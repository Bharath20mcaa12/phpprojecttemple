  
<html>
<head>
    <title>Cookies</title>
    </style>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post" action="bill1.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center"> Bill</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name"></th>
        </tr>
        <tr>
            <th>donation type</th><th><input type="radio" name="don" value="management">Management<input type="radio" name="don" value="trust">Trust<input type="radio" name="don" value="development">Development</th>
        </tr> 
            <tr>
            <th>Amount</th><th><input type="number" name="amount"></th>
        </tr>
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit"></th>
        </tr> 
    </table>
    </form>
    </center>
</body>
</html>