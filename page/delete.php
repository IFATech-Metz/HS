<?php
    $file = $_GET['id_delete'];
    print_r($file);
    unlink("./txt/".$file.".txt");

    echo "file deleted! <a href='find.php'>Click here</a>";
?>