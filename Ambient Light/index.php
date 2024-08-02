<!DOCTYPE html>
<html lang="en">
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
    <title>Ambient Light</title>
</head>
<body>
    <div class="player">
        <video id="video" controls autoplay loop>
            <source src="#video" type="video/webm">
        </video>
        <canvas id="light"></canvas>
    </div>
    <div class="container">
        <button class="amb_l_btn_a">Activate Ambient Light</button>
        <button class="amb_l_btn_d">Deactivate Ambient Light</button>
    </div>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
        "></script>
</body>
</html>
