<!DOCTYPE html>
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
    <title>Google Maps</title>
</head>
<body>
    <input type="text" name="" id="street" placeholder="Street . . .">
    <input type="text" name="" id="city" placeholder="City . . .">
    <button id="send">send</button>
    <div style="overflow:hidden;resize:none;max-width:100%;width:500px;height:500px; margin-top: 30px;">
        <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="" id="map"></iframe>
        </div>
        <a class="googlemaps-made" href="https://www.bootstrapskins.com/themes" id="grab-map-data">premium bootstrap themes</a>
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
