<?php
    require_once(__DIR__ . '/../utils/StarterDex.util.php');

    function renderStarterList($filter = "All"){
        $starters = getStarterPokemon();
        foreach ($starters as $generation => $pokemonList) {
            $filteredList = array_filter($pokemonList, function($poke) use ($filter) {
                return $filter === "All" || in_array($filter, $poke['type']);
            });

            echo "<div class='grid'>";
                echo "<h2>$generation</h2><div class='starter-container'>";
                foreach ($filteredList as $pokemon) {
                    echo "<div class='starter-card'>";
                    echo "<img src='../../" . $pokemon['image'] . "'alt='" . $pokemon['name'] . "'/>";
                    echo "<h3>" . $pokemon['name'] . "</h3>";
                    echo "<p>Type: " . implode("/", $pokemon['type']) . "</p>";
                    echo "</div>";
                }
                echo "</div>";
            echo "</div>";
        }
    }
?>