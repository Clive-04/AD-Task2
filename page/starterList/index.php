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
        <form method="GET">
            <label for="filter">Filter by Type:</label>
            <select name="filter" id="filter">
                <option value="All">All</option>
                <option value="Grass">Grass</option>
                <option value="Fire">Fire</option>
                <option value="Water">Water</option>
            </select>
            <button type="submit">Apply</button>
        </form>
        <?php 
            $filter = $_GET['filter'] ?? 'All';
            renderStarterList($filter);
        ?>
    </body>
</html>