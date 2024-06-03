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
    <body>
        <header>
            <nav>
                <ul class="topnav">
                    <li> <a class="active" href="index.php">Home</a></li>
                    <li> <a href="about.html">About</a></li>
                    <li> <a href="constacts.html">Contact</a><li>
                </ul>
            </nav>
            
            <div><button class="button" onclick="toggleDarkMode()">Toggle Dark Mode</button></div>
        </header>
        <div class="center"><form method="post" attribute="post" action="index.php">
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
        
        
        <p><?php
        include 'calc.php';
        echo $first. $function. $second. "=". $result;
        
        ?></p>
        </div>
    </body>
</html>