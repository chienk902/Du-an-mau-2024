<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Hub</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-EEH3nJ1R0rO8zBswN/mO7wzLdMn+28mqwo+uoOxnpv/sbiXlHdRWu6c8y7IaEoKG" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h1>BHZ Movies</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hot-genres">
            <h2>Hot Genres</h2>
            <div class="genre-grid">
                <?php
                foreach ($dstheloai as $item) {
                    extract($item);
                    echo '<div class="genre">
                          <i class="fas fa-fire"></i>
                          <p>' . $name . '</p>
                          </div>';
                }
                ?>


            </div>
        </section>
        <section class="favorite-movies">
            <h2>Favorite Movies</h2>
            <div class="movie-grid">
                <div class="movie">
                    <img src="img/chichiemem2.webp" alt="Movie 1" />
                    <h3>Movie 1</h3>
                    <p>Category: Action</p>
                    <p>Views: 1000</p>
                </div>
                <div class="movie">
                    <img src="img/connhot.webp" alt="Movie 2" />
                    <h3>Movie 2</h3>
                    <p>Category: Comedy</p>
                    <p>Views: 1500</p>
                </div>
                <div class="movie">
                    <img src="img/datrung.webp" alt="Movie 3" />
                    <h3>Movie 3</h3>
                    <p>Category: Drama</p>
                    <p>Views: 800</p>
                </div>
            </div>
        </section>

        <section class="popular-movies">
            <h2>Phim xem nhiều</h2>
            <div class="movie-grid">

                <?php
                foreach ($phimmoi as $item) {
                    extract($item);
                    echo '<div class="movie">
                    <img src="img/' . $img . '" alt="Movie 3" />
                    <h3>' . $name . '</h3>
                    <p>Category: ' . $idcate . '</p>
                    <p>Views: ' . $view . '</p>
                </div>';
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 BHZCo. All rights reserved.</p>
    </footer>
</body>

</html>