<?php   
    require './config.php';
    require './src/db.php';
    
    $username= filter_input(INPUT_POST,'name');
    $email=filter_input(INPUT_POST,'email');
    $apellido=filter_input(INPUT_POST,'apellido');
    $poblacion=filter_input(INPUT_POST,'poblacion');
    $passwd=filter_input(INPUT_POST,'passwd');
    $passwd2=filter_input(INPUT_POST,'passwd2');

    $db=getConnection($dsn,$dbuser,$dbpass);

    $statement = $db->prepare("INSERT INTO alumnos(nombre,apellido,email,poblacion,passwd) VALUES (?,?,?,?,?);");

    if($passwd==$passwd2){
        $statement->execute([$username,$apellido,$email,$poblacion,$passwd]);
        $_SESSION["nameregister"]=$username;
        $_SESSION["apellido"]=$apellido;
        $_SESSION["poblacion"]=$poblacion;
        $_SESSION["email"]=$email;
        header("Location: ?url=home");
    } else{
        echo "<h1 class='error_login'> las contraseñas no coinciden </div>";
        echo "<br><br><a class='error_login' href='?url=home'> Home </a>";
    }
?>