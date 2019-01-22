<?php

$results = $db->query("SELECT * FROM entries ORDER BY 'date' DESC");


//Prepare statement to add/edit view for the entry page
function add_entry($title, $date, $time_spent, $learned, $resources) {
    include 'connection.php';
    
    $sql = "INSERT INTO entries($title, $date, $time_spent, $learned, $resources)";
        try {
         $results =$db->prepare($sql);
         $results->bindValue($title[0], PDO::PARAM_STR);
         $results->bindValue($date[1], PDO::PARAM_STR);
         $results->bindValue($time_spen[2]t, PDO::PARAM_STR);
         $results->bindValue($learned[3], PDO::PARAM_STR);
         $results->bindValue($resources[4], PDO::PARAM_STR);
         $results->execute();
         } catch(Exception $e) {
            echo $results;             
        }
}

        ?>


