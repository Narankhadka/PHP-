<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack</title>
</head>
<body>
    <?php

    $stack = array();
    $top = -1;

    function push(&$arr, &$top, $element)
    {
       
        $top++;
        
        $arr[$top] = $element;
    }

    function pop(&$arr, &$top)
    {
        if(isEmpty($top))
        {
            echo "Stack is Empty";
        } else
        {
            $element = $arr[$top];
            unset($arr[$top]);
            $top--; 
            return $element; 
        }
    }
    function isEmpty($top)
    {
        if($top==-1)
        {
            return true;
        }
        return false;
    }

    function remove(&$arr, &$top)
    {
        if(isEmpty($top))
        {
            echo "Stack is Empty";
        }
        else
        {
            unset($arr[$top]); 
            $top--; 
        }
    }

    
    push($stack, $top, 3);
    push($stack, $top, 45);
    push($stack, $top, 2);
    push($stack, $top, 5);
    push($stack, $top, 6);

    remove($stack, $top);
    $stackSize = $top + 1;


    echo "Stack: ";
    for ($i = 0; $i <= $top; $i++) {
        echo $stack[$i] . " ";
    }
  
    $stackSize = $top + 1;
    echo "<br>"."the size of an stack is ".$stackSize." ";
    
    
    
    ?>
</body>
</html>
