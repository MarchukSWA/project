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
                echo'
                <script>
                    function DivideZero(){
                        var DivideZeroVar = document.createElement("DivideZeroImage");
                        DivideZeroVar.setAttribute("src", "https://i.kym-cdn.com/entries/icons/facebook/000/041/742/cover3.jpg")
                        DivideZeroVar.setAttribute("alt", "BLEHCat");
                        document.body.appendChild(DivideZeroVar);

                    }
                </script>';
                    
            else:                
                $result = $first / $second;
            endif;                
            break;
        default:
            break;
        endswitch;
?>