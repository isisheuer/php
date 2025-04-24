<?php
    session_start();
   // session_destroy();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "girafa";
    echo "session variables are set";
    echo $_SESSION["favcolor"];
    echo $_SESSION["favanimal"];

    ?>
</body>
</html>