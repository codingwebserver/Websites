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
    <link rel="stylesheet" href="https://pyscript.net/releases/2024.6.1/core.css">
    <script type="module" src="https://pyscript.net/releases/2024.6.1/core.js"></script>
    <title>Pyscript</title>
</head>
<body>
    <script type="py-editor">
        #To run your python code using pyodide write it here
    </script>
    <div class="border"></div>
    <script type="mpy-editor">
        #To run your python code using micropython write it here
    </script>  
</body>
</html>
