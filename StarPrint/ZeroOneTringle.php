<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $zero=0;
    $one=1;
    for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <=$i ; $j++) {
        if($i%2== 1)
    {
        echo "$one"." ";
    }
    else{
        echo "$zero"." ";
    }

    }

    echo "<br>";
}

   ?>

</body>
</html>