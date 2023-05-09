<?php 
// Increment runtimeMinutes of all Movies using only SQL query (not in API code).
// Increment runtimeMinutes by :
//     15 if genre = Documentary
//     30 if genre = Animation
//     45 for the rest
$arr = array();
if(
    isset($_POST["Increment"]) && $_POST["Increment"] == "True"
){
    // Insert the new movie into the database
    $query = "UPDATE movies
                SET runtimeMinutes = runtimeMinutes +
                    CASE
                        WHEN genres LIKE '%Documentary%' THEN 15
                        WHEN genres LIKE '%Animation%' THEN 30
                        ELSE 45
                    END;";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $status = "Updated Success";
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