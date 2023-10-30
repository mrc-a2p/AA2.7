<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./public/css/style.css">
    </head> 

    <body>
        <aside class="aside_home">
            <h1 class="title_home">SCHOOL</h1>
            <div class="nav_home">
                <a href="?url=login">Logout</a>
                <a href="?url=user">Perfil</a>
            </div>
        </aside>

        <?php 
            echo '<div class="text_home"> Bienvenido al Curso 2023/2024, '.$_SESSION["username"].'  ' .$_SESSION["apellido"]. "</div>";
        ?>

        <h1 class="title_escritorio">Todos los cursos:</h1>

        <div class='text_materias'>
            <?php   
                require '././config.php';
                require './src/db.php';

                $db=getConnection($dsn,$dbuser,$dbpass);
                $statement = $db->prepare("SELECT * FROM materias");
                $statement-> execute();
                $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

                foreach ($resultados as $fila) {  
                    $idAlumno = $fila['IdAlumno'];
                    $clase = $fila['Clase'];
                    $_SESSION['IdAlumno'] = $idAlumno;
                    $_SESSION['Clase'] = $clase;
                    // Realiza acciones con los datos, como mostrarlos en tu página web
                    echo " <div class='master_enlace'><a class='enlace_home' href='?url=curso'>$clase</a></div>";
                }
            ?>
        </div>
        
    </body>
    <?php include_once 'partials/footer.tpl.php' ;?>            
</html>