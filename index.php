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
                $result = "N/A";
            else:                
                $result = $first / $second;
            endif;                
            break;
        default:
            break;
        endswitch;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body.dark-theme {
            background-color: #333;
            color: #fff;
        }
    </style>
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle("dark-theme");
            localStorage.setItem("darkMode", document.body.classList.contains("dark-theme"));
        }

        function loadDarkModePreference() {
            const darkModeEnabled = localStorage.getItem("darkMode") === "true";
            if (darkModeEnabled) {
                document.body.classList.add("dark-theme");
            }
        }

        window.onload = loadDarkModePreference;
    </script>
</head>
<body>
    <form method="post" attribute="post" action="index.php">
        <p>First Value:<br/>
            <input type="text" id="first" name="first"></p>

        <label for="function">Choose a function:</label>
        <select name="function" id="function">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <p>Second Value:<br/>
            <input type="text" id="second" name="second"></p>
        <button type="submit" name="answer" id="answer" value="answer">Calculate</button>
    </form>

    <p><?php echo $first. $function. $second. "=". $result; ?></p>
    
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
</body>
</html>
