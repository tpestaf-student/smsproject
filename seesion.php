<?php
session_start();

$_SESSION['user'] = "Arooba";

echo "session set";


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
            
            echo $_SESSION['user'];

if(isset($_SESSION['user']))
{
echo $_SESSION['user'];
}

           // session_unset();

          //  session_destroy();

            

        ?>

</body>
</html>