<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Codigo HTML</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="url" placeholder="Ingrsa la URL">
        <input type="submit" value="Obtener HTML">
    </form>
</body>
</html>

<?php
    if($_POST['url']){
        $lineas = file($_POST['url']);

        foreach($lineas as $num_linea => $linea){
            echo "Linea #<b>{num_linea}</b> : " . htmlspecialchars($linea) . "<br>\n";
        }
    }
?>