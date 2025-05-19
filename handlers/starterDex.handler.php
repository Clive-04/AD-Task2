<?php
    require_once(__DIR__ . '/../utils/StarterDex.utils.php');

    function renderStarterList($filter = "All"){
        $starters = getStarterPokemon();

        foreach ($starters as $generation => $pokemonList) {
            $filteredList = array_filter($pokemonList, function($poke) use ($filter) {
                return $filter === "All" || in_array($filter, $poke['type']);
            });

            if (empty($filteredList)) continue;

            echo "<div class='gen-group'>";
            echo "<h2 class='gen-heading'>$generation</h2>";
            echo "<div class='starter-container'>";

            foreach ($filteredList as $pokemon) {
                echo "<div class='starter-card'>";
                echo "<img src='../../" . htmlspecialchars($pokemon['image']) . "' alt='" . htmlspecialchars($pokemon['name']) . "' />";
                echo "<h3>" . htmlspecialchars($pokemon['name']) . "</h3>";
                echo "<p>Type: " . htmlspecialchars(implode("/", $pokemon['type'])) . "</p>";
                echo "</div>";
            }

            echo "</div>";
            echo "</div>";
        }
    }
?>