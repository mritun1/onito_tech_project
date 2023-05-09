<?php 
// This route returns as JSON the top 10 movies with the longest runTime
// The output should contain tconst, primaryTitle, runtimeMinutes & genres
include "../../../db/connect.php";

$findGroup = "SELECT * FROM movies ORDER BY runtimeMinutes DESC LIMIT 10";
$sql = mysqli_query($conn,$findGroup);
$arr = array();
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $arr[] = array(
            "tconst" => $row['tconst'],
            "primaryTitle" => $row['primaryTitle'],
            "runtimeMinutes" => $row['runtimeMinutes'],
            "genres" => $row['genres'],
        );
    }
}

$json = json_encode($arr);
echo $json;
?>