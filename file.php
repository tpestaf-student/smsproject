<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
      
    <input type="file" name="f1"/>
    <input type="submit" />
        <br><br>
    <input type="file" name="f2"/>
    <input type="submit"/>

</form>



<?php
if(isset($_FILES['f1']))
    {

        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        echo "<br> <br> <br>";

        

        $tempn=$_FILES['f1']['tmp_name'];
          $fn=$_FILES['f1']['name'];


        if(move_uploaded_file($tempn,"aroob/".$fn))
        {
            echo "file uploaded";
        }
        else
        {
            echo "error in file";
        }

    }


    if(isset($_FILES['f2']))
    {

        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        echo "<br> <br> <br>";

        

        $tempn=$_FILES['f2']['tmp_name'];
          $fn=$_FILES['f2']['name'];


        if(move_uploaded_file($tempn,"aroob/".$fn))
        {
            echo "file uploaded";
        }
        else
        {
            echo "error in file";
        }

    }

    ?>
</body>
</html>