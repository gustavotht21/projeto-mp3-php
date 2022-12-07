<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MP3 Online em PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body style="background-color: #D4D6FF;">
        <div class="container">
            <?php
                include_once ('helpers.php');

                if (isset($_GET['page'])) {
                   if (file_exists("pages/{$_GET['page']}.php")) {
                       include_once "pages/{$_GET['page']}.php";
                   }
                   else {
                        include_once 'pages/error404.php';
                   }
                } else {
                    include_once 'pages/albums.php';
                }
            ?>

        </div>
    </body>
</html>