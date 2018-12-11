
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

<?php


    // nom du répertoire à lister

    $rp_img = "./img/cartes";
    $rp_txt = "./txt";
    
    $rep_txt = opendir($rp_txt);

    $id ;

    while ($fichier = readdir($rep_txt)) {

        // parcours du répertoire

        if (($fichier != ".") && ($fichier != ".." ))
        {
            //echo $fichier;

            $chemin = $rp_txt . "/" . $fichier;

            $file = fopen ($chemin,'r');

            while(!feof($file)){
                $ligne=fgets($file);
                $separe = explode(' : ',$ligne);

                $champ = $separe[0];
                $valeur = $separe[1];
                $tableau[$champ] = $valeur; 

            }
            
            // Publish Text & Pic

            echo '<tr>';
            foreach ($tableau as $champ => $valeur) {

                echo '<td>' .$valeur . '</td>';
                
            }
            echo '<td><a href="./txt/'.$fichier.'"target="_blank">
            <input type="image" id="icon" img src="./img/iconlink.png" width=25%></a>Click</td>';

            echo "<td><img width=100  src = './" .$rp_img. "/" .$tableau["id"].".png '/></td>"; 

            $fichierimg = str_replace(".txt", ".png", $fichier);
            echo '<td><a href="./img/cartes/'.$fichierimg.'"target="_blank">
            <input type="image" id="icon" img src="./img/imglink.png" width=50></a>Click</td>';
                    
            echo '</tr>';


            fclose ($file);
        }                                                                                                                                                                        
    }
    
    closedir($rep_txt);




    $file_name = $_GET['edit'];
    $file_read = fopen("./txt/$file_name", "r");
    
    $contents = fread($file_read, filesize($file_name));
    fclose($file_read);
    echo "<pre>";
    print_r($contents);
    echo "</pre>">

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
