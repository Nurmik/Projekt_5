<?php

require 'phpFunctions.php';

$qfile = $_GET['question'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klaviatuuri kiirklahvid</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="wave-side">
          <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 1440">
            <g transform="rotate(90) translate(-10 -320)">
              <path fill="#770087" fill-opacity="1" d="M0,256L60,261.3C120,267,240,277,360,256C480,235,600,181,720,138.7C840,96,960,64,1080,42.7C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">       </path>
              <path fill="#B300B3" fill-opacity="1" d="M0,192L60,202.7C120,213,240,235,360,208C480,181,600,107,720,96C840,85,960,139,1080,133.3C1200,128,1320,64,1380,32L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">       </path>
              </g>
          </svg>
        </div>
        <div class="main-content">
            <div class="homepage-button-container">
                <a href="index.php" class="homepage-button">ESILEHELE</a>
                <p class="time-label">AEG</p>
            </div>
            <div class="timer-container">
                <div class="timer">
                    <span id="count-up">0:00</span>
                </div>
            </div>
            <div class="question-number-container">
                <div class="question-number">KÜSIMUS</div>
            </div>
            <div class="question-container">
                <div  id="question" class="question">küsimus</div>
            </div>
            <div class="dontremember-container">
                <a href="https://code.visualstudio.com/shortcuts/keyboard-shortcuts-windows.pdf" target="_blank" class="dontremember-link">Ei tule meelde?</a>
            </div>
            <div class="counter-container">
                <div id="counter-incorrect" class="counter-incorrect">0</div>
                <svg class="incorrect" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z"/></svg>
                <div id="counter-correct" class="counter-correct">0</div>
                <svg class="correct" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1 17l-5-5.299 1.399-1.43 3.574 3.736 6.572-7.007 1.455 1.403-8 8.597z"/></svg>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script src="lodash.js"></script>

</body>
</html>