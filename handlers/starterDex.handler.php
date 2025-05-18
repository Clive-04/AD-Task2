<?php
    require_once(__DIR__ . '/../utils/StarterDex.util.php');

    function renderStarterList(){
        $starters = getStarterPokemon();
        foreach ($starters as $generation => $pokemonList) {
            echo "<h2>$generation</h2><div class='starter-container'>";
            foreach ($pokemonList as $pokemon) {
                echo "<div class='starter-card'>";
                echo "<img src='../../" . $pokemon['image'] . "'alt='" . $pokemon['name'] . "'/>";
                echo "<h3>" . $pokemon['name'] . "</h3>";
                echo "<p>Type: " . $pokemon['type'] . "</p>";
                echo "</div>";
            }
            echo "</div>";
        }
    }
?>
