<?php
require 'phpFunctions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klaviatuuri kiirklahvid</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="add-question-button-container">
        <a href="/upload.html">
            <button class="add-question-button">Lisa oma küsimused</button>
        </a>
    </div>
    
    <div class="title-container">
        <div class="title">KLAVIATUURI KIIRKLAHVID</div>
    </div>
    <div class="description-container">
        <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
    </div>

        <div class="start-button-container">
            <label id="dropdown" for="questions">
                <select name="questions" id="questions">
                    <?php qlist();  ?>
                </select>
            </label>
            <a href="/index2.php">
                <button class="start-button">ALUSTA</button>
            </a>
        </div>

        <svg class="wave-violet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#770087" fill-opacity="1" d="M0,32L40,53.3C80,75,160,117,240,128C320,139,400,117,480,106.7C560,96,640,96,720,117.3C800,139,880,181,960,202.7C1040,224,1120,224,1200,234.7C1280,245,1360,267,1400,277.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        <path fill="#B300B3" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,192C320,224,400,256,480,245.3C560,235,640,181,720,181.3C800,181,880,235,960,245.3C1040,256,1120,224,1200,224C1280,224,1360,256,1400,272L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</body>
</html>