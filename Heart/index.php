<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'style.css' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <link rel="icon" type="image/x-icon" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'Logo_Black.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <title>Heart</title>
</head>
<body>
    <canvas id="heart"></canvas>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
    "></script>
</body>
</html>
