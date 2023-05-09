<?php 
include "../../../db/connect.php";

// This route takes JSON as input for new movie and saves it into the database
// On successful save, it returns “success”

$arr = array();
if(
    isset($_POST["genres"]) && $_POST["genres"] != "" ||
    isset($_POST["primaryTitle"]) && $_POST["primaryTitle"] != "" ||
    isset($_POST["titleType"]) && $_POST["titleType"] != "" ||
    isset($_POST["runtimeMinutes"]) && $_POST["runtimeMinutes"] != "" ||
    isset($_POST["averageRating"]) && $_POST["averageRating"] != "" ||
    isset($_POST["numVotes"]) && $_POST["numVotes"] != ""
){
    $genres = $_POST["genres"];
    $primaryTitle = $_POST["primaryTitle"];
    $numVotes = $_POST["numVotes"];
    $titleType = $_POST["titleType"];
    $runtimeMinutes = $_POST["runtimeMinutes"];
    $averageRating = $_POST["averageRating"];

    // Insert the new movie into the database
    $query = "INSERT INTO movies (titleType, primaryTitle, runtimeMinutes, genres) 
                    VALUES ('$titleType', '$primaryTitle', '$runtimeMinutes', '$genres')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Get the ID of the new movie
        $tconst = mysqli_insert_id($conn);
        
        // Insert the number of votes for the new movie into the ratings table
        $query = "INSERT INTO ratings (tconst, averageRating, numVotes) 
                                VALUES ('$tconst', $averageRating, $numVotes)";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            // Return success message
            $status = "Success";
        } else {
            // Return error message
            $status = "Error: " . mysqli_error($conn);
        }
    } else {
        // Return error message
        $status = "Error: " . mysqli_error($conn);
    }
}
$arr[] = array(
    "status" => $status,
);
$json = json_encode($arr);
echo $json;
?>