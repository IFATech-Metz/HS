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

            $orid=str_replace(".txt", "", $fichier);
            
            // Thank Cedric 4 Help ?!
                echo "<td>
                        <form method='GET' action=''>
                            <button type='submit' id='icon' name='".$orid."'> <img src='../img/iconerase.png' width=25%></button>
                        </form>
                    </td>";

            //unlink(realpath($fichier));
            //unlink ("../txt/".$fichier.".txt");
    
            echo '</tr>';


            fclose ($file);
        }     

        if (isset($_GET[$orid])) 
            {
                unlink ("../txt/".$orid.".txt");
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
            }  

    }
    
    closedir($rep_txt);

?>