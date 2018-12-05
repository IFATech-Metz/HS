<?php
    $file_name = $_GET['edit'];
    $file_read = fopen("./txt/$file_name", "r");
    
    $contents = fread($file_read, filesize($file_name));
    fclose($file_read);
    echo "<pre>";
    print_r($contents);
    echo "</pre>">
?>


<html>
    <form action = "edit_file.php" method = "POST">
        <label for = "ID" >ID</label>
        <input type = "id" id ="id" name ="id" value = "<?php echo $contents ?>">
        <label for = "TITRE" >TITRE</label>
        <input type = "titre" id = "titre" name = "titre" value = "<?php echo $contents ?>" >
        <label for = "DATE" >DATE</label>
        <input type = "date" id = "date" name = 'date' value = "<?php echo $contents ?>">
        <input type = "hidden" name = "file_name" value = "<?php echo $file_name;?>">
        <input type = "submit" value = "Save">
    </form>
</html>