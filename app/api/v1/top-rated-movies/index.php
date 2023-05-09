<?php 
// This route returns as JSON the movies with an averageRating > 6.0, in sorted
// order by averageRating
// The output should contain tconst, primaryTitle, genre & averageRating.
include "../../../db/connect.php";

$findGroup = "SELECT movies.*, ratings.averageRating FROM ratings LEFT OUTER JOIN movies ON (movies.tconst = ratings.tconst) WHERE ratings.averageRating > 6 ORDER BY ratings.averageRating";
$sql = mysqli_query($conn,$findGroup);
$arr = array();
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $arr[] = array(
            "tconst" => $row['tconst'],
            "primaryTitle" => $row['primaryTitle'],
            "averageRating" => $row['averageRating'],
            "genres" => $row['genres'],
        );
    }
}

$json = json_encode($arr);
echo $json;
?>