<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            $hora = date("G",time() );
        ?>
        <?php include('phpfunc/icon.php')?>
        <?php icon($hora)?>
        <link rel="stylesheet" href="assets/style.css">
        <meta charset="UTF-8">
    </head>
    <body align="center">
        <?php include('phpfunc/change.php') ?>
        <?php change($hora)?>
    </body>
</html>
