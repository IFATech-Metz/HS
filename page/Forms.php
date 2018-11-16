
<!DOCTYPE html>
<html>

<head>
    <title>Mon Formulaire</title>
</head>

<body>

    <?php

    if (isset($_POST['submit1'])){
        $pseudo = $_POST['pseudo'];

    echo $pseudo;
    
    }

    ?>

    <form name="form1" method="POST" action="forms.php">

        <input type="texte" name = "pseudo" value = "pseudo"> 
        <input type="submit" name = "submit1" value = "submit"> 

        <br><br>

        <!--
            <div>
            <label for="id">ID :</label>
            <input type="text" id="id" name="id_name">
        </div>
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="tire" name="titre_name">
        </div>
        <div>
            <label for="date">Date :</label>
            <input id="date" name="date_create">
        </div>
        <div>
            <label for="pic">pic :</label>
            <input type="image" src="pic location...">
        </div>
        <div>
            <input type="submit" name="submit" id="submit" class="button" />
        </div>
        -->

    </form>
    
</body>
</html>
