<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./public/css/style.css">
    </head>
    
    <body>
        <header class="a"><?php include_once 'partials/header.tpl.php';?></header>
        
        <div class="form">
            <h1><?= $title;?></h1><br><br>
            <form action="?url=registeraction" method="POST">
                    <input type="text" name="name" placeholder="Nombre..."><br><br>
                    <input type="text" name="apellido" placeholder="Apellido..."><br><br>
                    <input type="text"  name="email" placeholder="Email please..." required><br><br>
                    <input type="text"  name="poblacion" placeholder="Población..." required><br><br>
                    <input type="password" name="passwd" placeholder="Password..." required><br><br>
                    <input type="password" name="passwd2" placeholder="Repeat password" required><br><br>
                    <button type="submit" name="boton_registrar">Log in</button>
            </form>
            <aside class="aside">
                <a href="?url=home">Home</a>
                <a href="?url=login">Login</a>
            </aside>
        </div>
        
        <footer><?php include_once 'partials/footer.tpl.php' ;?></footer>
    </body>
    

    
    
</html>

