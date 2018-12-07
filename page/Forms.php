
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/style_hs.css"/>
    <title>Mon Formulaire</title>
</head>

<body>

    <p id="info">
        Hearstone <br>
        Espace Création de Fiche <br>
    </p>

    <ul class='menu'>

        <form name="form1" method="POST" action="forms.php" enctype="multipart/form-data">

            <li><input type="texte"     name = "titre"              value = "titre"></li>
            <li><input type="texte"     name = "date"               value = "date"><li>
            <li><input type="file"      name = "fileToUpload"       value = "fileToUpload" ><li>
            <li><input type="submit"    name = "submit"             value = "submit"><li>
        </form>
    </ul>

    <br>

    <p class="descript">
        Description:
        <br>
        <?php

        //Library
        $rp_img = "./img/cartes";
        $rp_txt = "../txt";

        $idcount = 0;


        $rep_txt = opendir($rp_txt);
            while ($fichier = readdir($rep_txt)) {
                //count files here
                    if (($fichier != ".") && ($fichier != ".." ))
                    {
                        //echo $fichier;
                        $idcount++;
                    }                                                                                                                                                                        
                }
        closedir($rep_txt);
        $id =       $idcount++;         //var incremt

        if (isset($_POST['submit'])){
            
            $title =    $_POST['titre'];
            $date =     $_POST['date'];

        $content .= "id : ".        $id             ."\r\n";
        $content .= "titre : ".     $_POST['titre'] ."\r\n";
        $content .=  "date : ".     $_POST['date']  ."\r\n";
        
        $h = fopen("../txt/".$id.".txt", "a");
        fwrite($h, $content);
        fclose($h);

        }


        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            //Picture Upload
            $target_dir = "../img/cartes/";
            $original_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir . $id . ".png";
            echo "mon fichier crée est : ID " . $id . "<br>";
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($original_file,PATHINFO_EXTENSION));
            echo "mon type est : " . $imageFileType . "<br>";

            /*$check = getimagesize($original_file);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }*/

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.". "<br>";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.". "<br>";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "We prefer PNG but JPG, JPEG, & GIF can Work for some Browser.". "<br>";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your Pic was not uploaded.". "<br>";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.". "<br>";
                }
            }
        }

        ?>
    </p>

    <li>
        <img src="../img/cardback.png" id = "carte" /> 
    </li>
    
    </body>


    
</html>
