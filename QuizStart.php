<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Meme Quiz</title>
    </head>
    
    <body>
        
        <?php
        
            $_SESSION["ScumbagSteve"] = 0;
            $_SESSION["BongoCat"] = 0;
            $_SESSION["SlapTheCar"] = 0;
            $_SESSION["MindBlown"] = 0;
            
            $value = $_POST["Color"];
            
            switch ($value){
                case "red": 
                    $_SESSION["ScumbagSteve"]++;
                break;
                case "green":
                    $_SESSION["BongoCat"]++;
                break;
                case "yellow":
                    $_SESSION["SlapTheCar"]++;
                break;
                case "blue":
                    $_SESSION["MindBlown"]++;
                break;
                default : echo"Error";
            }
            
            echo"$_SESSION[ScumbagSteve]<br>"
              . "$_SESSION[BongoCat]<br>"
              . "$_SESSION[SlapTheCar]<br>"
              . "$_SESSION[MindBlown]<br>";
        ?>
    </body>
</html>
