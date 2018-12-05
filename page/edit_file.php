<?php
    $edit = $_POST['id'] . "\r\n".$_POST['titre'] . "\r\n".$_POST['date'];
    echo "<pre>";
    print_r($edit);
    echo "<pre>";
    $file_name = $_POST['file_name'];
    $file = fopen("./txt/$file_name", 'w');
    fwrite($file, $edit);
    fclose($file);

    echo "file save! <a href='find.php'>Click here</a>";
?>