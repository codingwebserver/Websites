<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("Location: //Login Page Link");
    exit;
};

?>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>3D Glowing Bottle</title>
</head>
<body>
    <section>
        <div class="shadow"></div>
        <div class="bowl">
            <div class="liquid"></div>
        </div>
    </section>
</body>
</html>
