<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("partials/bootstrap.php")?>
    <link rel="stylesheet" href="../partials/card.view.css"/>
</head>
<body>
    <?php require("partials/nav.php");?>
    <div class="container" style="display: flex; justify-content: center">
        <div class="row" style="text-align: center;">
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
        </div>
        <div class="row" style="text-align: center;">
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
        </div>
        <div class="row" style="text-align: center;">
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
            <?php require("partials/card.view.php"); ?>
        </div>
    </div>
</body>
</html>