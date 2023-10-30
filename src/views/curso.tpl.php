<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./public/css/style.css">
    </head> 

    <body>
        
        <header><?php include_once 'partials/headers.tpl.php';?></header>

        <div class="master_curso">
            <?php   
                    require '././config.php';
                    require './src/db.php';

                    $db=getConnection($dsn,$dbuser,$dbpass);
                    $statement = $db->prepare("SELECT * FROM materias");
                    $statement-> execute();
                    $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($resultados as $fila) {
                        $nombre = $fila['Clase'];
                        $desc = $fila['Descripcion'];
                        $nombreprof = $fila['NombreProfesor'];
                        echo "
                            <div class='master_curso'>
                                <div class='cont_curso'>
                                    <h1 class='title_curso'>$nombre</h1>
                                    <p class='text_curso'>$desc</p>
                                    <div class='enlace_curso'>  
                                        <p class='profesor_curso'>Profesor: $nombreprof</p>
                                        <a class='entra_curso' href='?url=clase'>Entra</a>
                                    </div>    
                                </div>
                            </div>";
                    }     
            ?>

        </div>
        <?php include_once 'partials/footer.tpl.php' ;?>
    </body>

</html>