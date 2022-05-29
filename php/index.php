<!DOCTYPE html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Hello World</h1>
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
