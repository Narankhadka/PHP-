<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queue</title>
</head>
<body>
    <?php
    $size = 5;
    $array = array(); // Initialize an empty array
    $front = -1;
    $rear = -1;

    function isFull($front, $rear, $size)
    {
        if ($front == 0 && $rear == $size - 1)
        {
            return true;
        }
        return false;
    }

    function isEmpty($front)
    {
        if ($front == -1)
        {
            return true;
        }
        return false;
    }

    function enQueue(&$front, &$rear, $size, $element)
    {
        global $array; // Use the global array variable
        if (isFull($front, $rear, $size)) {
            echo "Queue is full" . "<br>";
        } else {
            if ($front == -1) {
                // mark front denote first element of queue
                $front = 0;
            }
            $rear++;
            // insert element at the rear
            $array[$rear] = $element;
            echo "Insert " . $element . "<br>";
        }
    }

    function deQueue(&$front, &$rear, $size)
    {
        global $array;
        if(isEmpty($front))
        {
            echo "Queue is Empty" . "<br>";
        }
        else
        {
            $element = $array[$front];
            echo $element . " Deleted" . "<br>";
            if ($front == $rear) {
                $front = -1;
                $rear = -1;
            } else {
                $front++;
            }
            return $element;
        }
    }
    function peek($front, $array)
    {
        if ($front == -1 || empty($array)) {
            echo "Queue is empty" . "<br>";
        } else {
            echo "Front element: " . $array[$front] . "<br>";
        }
    }
    

    enQueue($front, $rear, $size, 10);
    enQueue($front, $rear, $size, 120);
    enQueue($front, $rear, $size, 20);
    enQueue($front, $rear, $size, 300);
    deQueue($front, $rear, $size);
    peek($front,$array);
    ?>
</body>
</html>
