<?php

$results = $db->query("SELECT * FROM entries ORDER BY 'date' DESC");

function add_entry($title, $date, $time_spent, $learned, $resources) {
    include 'connection.php';
    
    $sql = "INSERT INTO entries($title, $date, $time_spent, $learned, $resources)";
        try {
         $results =$db->prepare($sql);
         $results->bindValue(1, $title, PDO::PARAM_STR);
         $results->bindValue(2, $date, PDO::PARAM_STR);
         $results->bindValue(3, $time_spent, PDO::PARAM_STR);
         $results->bindValue(4, $learned, PDO::PARAM_STR);
         $results->bindValue(5, $resources, PDO::PARAM_STR);
         $results->execute();
         } catch(Exception $e) {
            echo $results;             
        }
}

        ?>


