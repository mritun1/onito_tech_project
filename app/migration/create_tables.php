<?php 
include "../db/connect.php";

$movies = "CREATE TABLE movies(
    id INT NOT NULL AUTO_INCREMENT,
    tconst VARCHAR(255) NULL,
    titleType VARCHAR(255) NULL,
    primaryTitle VARCHAR(255) NULL,
    runtimeMinutes INT(255),
    genres VARCHAR(255) NULL,
    PRIMARY KEY(id)
    )";

// mysqli_query($conn,$movies);

$ratings = "CREATE TABLE ratings(
    id INT NOT NULL AUTO_INCREMENT,
    tconst VARCHAR(255) NULL,
    averageRating DECIMAL(60,2),
    numVotes INT(255),
    PRIMARY KEY(id)
    )";

// mysqli_query($conn,$ratings);
?>