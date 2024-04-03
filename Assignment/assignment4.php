<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($sum=1;$sum<=10;$sum++)
    {
        if ($sum%2== 0)
        {
            continue;
        }
        echo "$sum"." ";
    }
    ?>
</body>
</html>