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
            $baseUrl = 'Page_Icon.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
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
