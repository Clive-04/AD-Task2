<?php include '../../components/navbar.component.php'; ?>
<?php include '../../handlers/starterDex.handler.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/starterList.css">
        <title>Starter Pokemon Dex</title>
    </head>
    <body>
        <h1>Starter Pokemon By Generation</h1>
        <?php renderStarterList(); ?>
    </body>
</html>