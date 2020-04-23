<?php

$files = scandir('questions');
array_shift($files);
array_shift($files);

function qlist() {
    global $files;
    foreach ($files as $quest) {
        $item = "<option value=".$quest.">".$quest."</option>";
        echo($item);
    }

}