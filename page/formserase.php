<!DOCTYPE html>

<html>
    <head>     
        <link rel="stylesheet" href="../style/style_hs.css"/>
        <title>mon formulaire de modification</title>
    </head>

    <body>

        <section>

                <p id="info">
                Catalogue en ligne <br>
                Espace Supression <br>
                </p>

        </section>
                 
        <br><br>

        <article>
                
            
            <section id="section">

                <table>
                    <tr>
                        <th>id</th>
                        <th>titre</th>
                        <th>date</th>
                        <th>-</th>
                        <th>erase</th>

                    <?php
                        include '../page/libraryerase.php';
                    ?>
                    
                    </tr>

                </table>

            </section>

        </article>

    </body>
     
</html>
