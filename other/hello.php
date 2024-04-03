<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// echo "hello naran khadka";
$large=0;
$arr=array("50","90","40","0","15","25");
for ($i = 0; $i < count($arr); $i++) {
  if ($arr[$i]>$large) {
    $large=$arr[$i];

}
}
echo "$large";
?>
</body>
</html>

