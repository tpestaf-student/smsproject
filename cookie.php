<?php
setcookie("fname","Ali",time() + 4600);

echo "cookie is set:";

session_start();

echo $_SESSION['user'];

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
        if(isset($_COOKIE['fname']))
            {
                echo $_COOKIE['fname'];
            }
            else
            {
                echo "cookie is not set";
            }
    ?>
    
</body>
</html>