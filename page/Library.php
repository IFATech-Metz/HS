<?php

    // nom du répertoire à lister

    $rp_img = "../img/cartes";
    $rp_txt = "../txt";
    
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
            <input type="image" id="icon" img src="../img/iconlink.png" width=25%></a>Click</td>';

            echo "<td><img width=100  src = './" .$rp_img. "/" .$tableau["id"].".png '/></td>"; 

            $fichierimg = str_replace(".txt", ".png", $fichier);
            echo '<td><a href="./img/cartes/'.$fichierimg.'"target="_blank">
            <input type="image" id="icon" img src="../img/imglink.png" width=50></a>Click</td>';
                    
            echo '</tr>';


            fclose ($file);
        }                                                                                                                                                                        
    }
    
    closedir($rep_txt);

?>