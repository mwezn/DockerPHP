<!DOCTYPE html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
    <ul>
        <li><a href="page2.php">Page2</a></li>
    
    </ul>

    </nav>
    <h1>Hello World</h1>
<?php
    $title= "WELCOME_HOME";
    $content= "<h3>Its cool using PHP for a change</h3>";
    include 'Template.php';
    include 'dbconfig.php';


?>
    
</body>
</html>
