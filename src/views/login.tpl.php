<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./public/css/style.css">
    </head> 

    <body>
        <header><?php include_once 'partials/header.tpl.php';?></header>
        
        <div class="form">
            <h1><?= $title;?></h1><br><br>
            <form action="?url=loginaction" method="POST">
                <input type="text"  name="email" placeholder="Email please..." require><br><br>
                <input type="password" name="password" placeholder="Password..." require><br><br>
                <button type="submit">Log in</button>
            </form>

            <aside class="aside">
                    <a href="?url=home">Home</a>
                    <a href="?url=register">Resgister</a>
            </aside>
        </div>
        
        <?php include_once 'partials/footer.tpl.php' ;?>
    </body>

</html>
 
 