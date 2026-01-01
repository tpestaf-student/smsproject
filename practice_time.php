<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<h1> Project</h1>


<?php
 echo date("Y-m-d H:i:s");  

    echo date("Y-m-d", strtotime("+5 day")); 
$a= date("Y-m-d",strtotime("+2 day"));


$b="Ali";

$v= password_hash($b,PASSWORD_DEFAULT);
echo "$v";

$b="Ali Ahmed";
if(password_verify($b,$v))
{
    echo "password match";
}
else
{
    echo "password not match";
}

?>












</body>
</html>