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
    <h1 id="intro">Hello World</h1>
    <form action="login.php" method="post">
        <div class="login">
        <input type="text" name="username"></input>
        <br>
        <input type="text" name="password"></input>
        <br>
        <input type="submit" value="Enter"></input>
        </div>
    </form>

<?php
    
    echo "<p>This is Page2";
    function square($x) {
        $y=$x*$x;
        echo "<h1> The value of $x*$x is:$y</h1>";
    }

   square(10)
?>
    
</body>
</html>
