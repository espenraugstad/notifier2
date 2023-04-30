<?php
    // Set headers for SSE
    header("Content-type: text/event-stream");
    header("Cache-control: no-cache");

    // Read info from the txt.file
    $data = file_get_contents("message.txt");

    // Send the data to the listener

    echo "event: message\ndata: ".$data."\n\n";
    flush();




?>