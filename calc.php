<!doctype html>

<html>
    <head>
        
        <meta charset="utf-8">
        <title>Calculator</title>
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="bar.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="centering_div.css">
        <script src="script.js"></script>
        <script src="imageinput.js"></script>
    </head>

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

                echo '<img id="myImg" src="https://i.kym-cdn.com/entries/icons/facebook/000/041/742/cover3.jpg" alt="The Pulpit Rock" width="304" height="228">';
                echo '<br>';
                    
            else:                
                $result = $first / $second;
            endif;                
            break;
        default:
            break;
        endswitch;
?>