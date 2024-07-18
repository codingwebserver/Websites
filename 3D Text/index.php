<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'Page_Icon.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <link rel="stylesheet" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'style.css' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <title>3D Text</title>
</head>
<body>
    <span class="text">3D Text</span>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
    "></script>
</body>
</html>
