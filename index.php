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
            <img src="img/titrehs.png" id = "titre" />
            <img src="img/anims.gif" id = "anims" />
        </div>

        <header>
                <!--<h1> HeartStone </h1>-->
                <h2> Accueil </h2>
        </header>

            <section>

                    <p id="info">
                    Catalogue en ligne <br>
                    Projet Catalogue HearStone <br>
                    </p>

            </section>
            
            <nav>
                <?php include("./page/menu.php"); ?>
            </nav>
                
            <br><br>

        <article>
                
            
            <section id="section">

                <table>
                    <tr>
                        <th>id</th>
                        <th>titre</th>
                        <th>date</th>
                        <th>File Access</th>
                        <th>image</th>
                        <th>Pic Access</th>

                    <?php
                        include './page/cont_lib.php';
                    ?>
                    
                    </tr>

                </table>

            </section>

        </article>

<br>
        <footer>
                Termes   License   Confidentialitée
        </footer>

    </body>
            

</html>
