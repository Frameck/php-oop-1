<?php

require_once __DIR__ . "./classes/Movie.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php classes</title>
    <?php include_once __DIR__ . "./data/moviesList.php"; ?>
</head>
<body>
    <main>
        <div class="ps-4">
            <h1>Lista Film</h1>
            <ul>
                <?php 
                    foreach ($moviesList as $key => $movieItem) {
                        $movie = new Movie(
                            $movieItem["title"],
                            $movieItem["year"],
                            $movieItem["rating"],
                            $movieItem["directors"],
                            $movieItem["cast"],
                        );

                        echo "<h3>" . $movie->getMovieData("title") . "</h3>";
                        echo "<ul>";
                            echo "<li> <i><b>Anno di uscita</b></i>: " . $movie->getMovieData("year") . "</li>";
                            echo "<li> <i><b>Rating</b></i>: " . $movie->getMovieData("rating") . "</li>";

                            echo "<li> <i><b>Registi</b></i>: ";
                                $numRegisti = count($movie->getMovieData("directors"));
                                foreach ($movie->getMovieData("directors") as $key => $value) {
                                    if ($key < $numRegisti - 1) {
                                        echo "<span>$value</span>, ";
                                    } else {
                                        echo "<span>$value</span> ";
                                    }
                                }
                            echo "</li>";

                            echo "<li> <i><b>Cast</b></i>: ";
                                $numCast = count($movie->getMovieData("cast"));
                                foreach ($movie->getMovieData("cast") as $key => $value) {
                                    if ($key < $numCast - 1) {
                                        echo "<span>$value</span>, ";
                                    } else {
                                        echo "<span>$value</span> ";
                                    }
                                }
                            echo "</li>";
                        echo "</ul>";
                    }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>