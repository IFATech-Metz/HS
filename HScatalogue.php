<!DOCTYPE html>

<html>
    <head>     
        <link rel="stylesheet" href="style/style_hs.css"/>
        <link rel="icon" type="image/png" href="img/logohs.png" />
        <title>HeartStone</title>
    </head>

    <body>

        <div>
            
            <img src="img/logohs.png" id = "logo" />

            <img src="img/anims.gif" id = "anims" />
            
            <img src="img/titrehs.png" id = "titre" />    

        </div>

        <header>
                <h1> HeartStone </h1>
                <h2> Accueil </h2>
        </header>

                <section>

                        <p id="info">
                        Catalogue en ligne <br>
                        Projet HearStone basé sur le jeu , une Collection, des échange, l'historique <br>
                        et bien plus a voir...
                        </p>

                </section>

                    <?php include("./page/menu.php"); ?>
                 
                <br><br>

                <article>
                
            
                <section id="section">

                <table>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>date</th>
                    <th>-</th>
                    <th>image</th>

                </tr>

                <?php
                    include './page/cont_lib.php';
                ?>

                </table>

                </section>

                </article>

<br>
        <footer>
                Termes   License   Confidentialitée
        </footer>

    </body>
            

<?php

?>
