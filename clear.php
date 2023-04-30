<?php

    // Clear the file message.txt
    file_put_contents("message.txt", "");

    header("Location: listener.html");

?>