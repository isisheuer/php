<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset ($_COOKIE['nome'])){
        echo "valor em 'nome': " . $_COOKIE['nome'];  
    } else{
        echo "definindo o cookie 'nome'";
        setcookie ('nome', 'Isis', time() + 3600);
    }

    ?>
</body>
</html>