<?php
    session_start();
    echo "Session ID: " . session_id();

    session_regenerate_id(true);
    echo "<br>New Session ID: " . session_id();
?>