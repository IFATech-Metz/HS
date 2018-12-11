<!DOCTYPE html>

<html>
    <head>     
        <link rel="stylesheet" href="../style/style_hs.css"/>
        <title>Carte supression</title>
    </head>

    <body>

        <section>

                <p id="info">
                Catalogue HearStone <br>
                Espace Supression <br>
                </p>

        </section>
                 
        <br><br>
  
            <section id="section">

            <ul>
                <li><a href="../index.php">Accueil</a></li>
            </ul>
            
                <table>
                    <tr>
                        <th>id</th>
                        <th>titre</th>
                        <th>date</th>
                        <th>erase</th>
                        <?php
                            include '../page/libraryerase.php';
                        ?> 
                    </tr>

                </table>

            </section>

    </body>
     
</html>
