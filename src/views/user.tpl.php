<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./public/css/style.css">
    </head> 

    <body>
        
        <header><?php include_once 'partials/headers.tpl.php';?></header>

        <div class="master-user">
            <div class="cont-user">
                <?php 
                    echo '<div class="text_home">Nombre: ' .$_SESSION["nameregister"]. "</div>";
                    echo '<div class="text_home">Apellido:  '.$_SESSION["apellido"]. "</div>";
                    echo '<div class="text_home">Población:  '.$_SESSION["poblacion"]. "</div>";
                    echo '<div class="text_home">Email:  '.$_SESSION["email"]. "</div>";
                ?>
            </div>
            
        </div>
        


        <?php include_once 'partials/footer.tpl.php' ;?>
    </body>

</html>