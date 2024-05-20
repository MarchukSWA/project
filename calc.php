<?php
$result = "";
$first = 0;
$second = 0;
$function = "+";
    if (!empty($_POST['first'])):
        $first = $_POST['first'];
    endif;
    if(!empty($_POST['second'])):
        $second = $_POST['second'];
    endif;        
    if(!empty($_POST['function'])):
        $function = $_POST['function'];
    endif;
    switch($function):
        case "+":
            $result = $first + $second;
            break;
        case "-":
            $result = $first - $second;
            break;
        case "*":
            $result = $first * $second;
            break;
        case "/":
            if ($second == 0):
                $result = "N/A";
            else:                
                $result = $first / $second;
            endif;                
            break;
        default:
            break;
        endswitch;
?>