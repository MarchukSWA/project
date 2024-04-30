<?php
$result = "";
$first = 0;
$second = 0;
$function = "";
    if (!empty($_POST['first'])):
        $first = $_POST['first'];
    endif;
    if(!empty($_POST['second'])):
        $second = $_POST['second'];
    endif;        
    $function = $_POST["function"];
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
                // $result = $_GET['https://i.kym-cdn.com/photos/images/original/001/439/881/ed5.png'];
                $result = "N/A";
            else:                
                $result = $first / $second;
            endif;                
            break;
        default:
            break;
        endswitch;
?>