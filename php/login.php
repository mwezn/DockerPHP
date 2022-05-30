<!DOCTYPE html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
    
    </ul>

    </nav>
    <h1>Hello</h1>
Welcome <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["password"]; ?>
<?php
    
    echo "<p>Hello World. This is my first ever website built with Apache,PHP & Docker!</p>";
    function square($x) {
        $y=$x*$x;
        echo "<h1> The value of $x*$x is:$y</h1>";
    }

   square(10)
?>
    
</body>
</html>
