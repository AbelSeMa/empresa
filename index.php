<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
</head>
<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=empresa', 'empresa', '051291');
    $sent = $pdo->query('SELECT * FROM departamentos');
    
    $fila = $sent->fetch();

    echo "<pre>";
    foreach ($sent as $fila) {
        print_r($fila)
    }

    ?>
</body>
</html>