<?php 
include "../db/connect.php";

// // MOVIES START
// // Open CSV file
// $csvFile = fopen('movies.csv', 'r');
// // Loop through CSV data
// $i = 0;
// while (($row = fgetcsv($csvFile)) !== false) {
//     // Construct INSERT query
//    $i++;
//    if($i>1){
//     mysqli_query($conn,"INSERT INTO movies(tconst, titleType, primaryTitle, runtimeMinutes, genres) 
//                                     VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')");
//    }
// }
// // MOVIES END

// // MOVIES START
// // Open CSV file
// $csvFile = fopen('ratings.csv', 'r');
// // Loop through CSV data
// $i = 0;
// while (($row = fgetcsv($csvFile)) !== false) {
//     // Construct INSERT query
//    $i++;
//    if($i>1){
//     mysqli_query($conn,"INSERT INTO ratings(tconst, averageRating, numVotes) 
//                                     VALUES('$row[0]','$row[1]','$row[2]')");
//    }
// }
// // MOVIES END

// Close CSV file
fclose($csvFile);

?>