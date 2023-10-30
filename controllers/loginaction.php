<?php
    require './config.php';
    require './src/db.php';

    $username= filter_input(INPUT_POST,'email');
    $passwd=filter_input(INPUT_POST,'password');
    $boton_login=filter_input(INPUT_POST,'boton');

    $db=getConnection($dsn,$dbuser,$dbpass);
    $statement = $db->prepare("SELECT * FROM alumnos WHERE nombre= '".$username."' AND passwd= '".$passwd."'");
    $statement-> execute();

    //FETCH_ASSOC-> convertir en array asociativo
    $peticion = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(empty($peticion)){
        echo "<h1 class='error_login'>El usuario o contraseña que has introducido son incorrectos </div>"; 
        echo "<br><br><a class='error_login' href='?url=login'> login </a>";
    } else {
        $_SESSION["username"]=$username;
        header("Location: ?url=escritorio");
    }
?>




    

