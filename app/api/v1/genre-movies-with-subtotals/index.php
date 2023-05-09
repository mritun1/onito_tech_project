<?php 
include "../../../db/connect.php";

$findGroup = "SELECT m.genres, m.primaryTitle, r.numVotes FROM movies AS m JOIN ratings AS r ON m.tconst = r.tconst GROUP BY m.genres, m.primaryTitle ORDER BY m.genres";
$sql = mysqli_query($conn,$findGroup);
$arr = array();
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $genres = $row['genres'];
        $numVotesTotal = mysqli_fetch_row(mysqli_query($conn,"SELECT SUM(ratings.numVotes) AS total FROM movies LEFT OUTER JOIN ratings ON (movies.tconst = ratings.tconst) WHERE movies.genres='$genres'"));

        //echo $genres . '--' . $row['primaryTitle'] . '--' . $row['numVotes'] . '--' . $numVotesTotal[0] .'<br/>';
        $arr[] = array(
            "genres" => $genres,
            "primaryTitle" => $row['primaryTitle'],
            "numVotes" => $row['numVotes'],
            "subTotal" => $numVotesTotal[0]
        );
    }
}

$json = json_encode($arr);
echo $json;
?>