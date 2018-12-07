<?php

    // nom du répertoire à lister

    $rp_img = "./img/cartes";
    $rp_txt = "./txt";
    
    $rep_txt = opendir($rp_txt);
    
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
            
            // affichage image
            echo '<tr>';
            foreach ($tableau as $champ => $valeur) {
                echo '<td>' . $valeur . '</td>';
            }
                echo "<td><img width=100 height=120 src = './" .$rp_img. "/" .$tableau["id"].".png '/></td>"; 
                    
            echo '</tr>';

            fclose ($file);
        }                                                                                                                                                                        
    }
    
    closedir($rep_txt);

?>