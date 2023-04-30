<?php
    date_default_timezone_set("Europe/Oslo");
    // Open the message.txt-file
    $handler = fopen("message.txt", "a");
    
    // Get the current time
    $time = localtime();
    $min = $time[1];
    if(strlen($min) < 2){
        $min = "0".$min;
    }
    $hour = $time[2];
    if(strlen($hour) < 2){
        $hour = "0".$hour;
    }
    $now = $hour .":". $min;
    print_r($hour);
    
    // Write the time to the text-file
    fwrite($handler, $now);

    // Close the file
    fclose($handler);

    // Relocate to thankyou page
    header("Location: ./thankyou.html");
?>