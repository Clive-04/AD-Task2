<?php 
    include_once '../../components/navbar.component.php';
    include_once '../../handlers/starterDex.handler.php';
    $filter = $_GET['type'] ?? 'All';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/page/starterList/assets/css/starterList.css">
        <title>Starter Pokemon Dex</title>
    </head>
    <body>
        <div class="container">
            <h1>Pokemon Starter Dex</h1>

            <div class="filter-bar">
                <form method="GET">
                    <select name="type" onchange="this.form.submit()">
                        <option value="All" <?= $filter === "All" ? "selected" : "" ?>>All</option>
                        <option value="Grass" <?= $filter === "Grass" ? "selected" : "" ?>>Grass</option>
                        <option value="Fire" <?= $filter === "Fire" ? "selected" : "" ?>>Fire</option>
                        <option value="Water" <?= $filter === "Water" ? "selected" : "" ?>>Water</option>
                    </select>
                </form>
            </div>

            <?php renderStarterList($filter); ?>
        </div>
    </body>
</html>

<?php include_once '../../components/footer.component.php'; ?>