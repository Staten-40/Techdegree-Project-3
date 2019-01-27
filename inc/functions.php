<?php

function get_all_entries() {
    include("connection.php");
    try {
      $sql = "SELECT * FROM entries ORDER BY date DESC";
        $results = $db->prepare($sql);
        $results->execute();
    } catch(Exception $e) {
      echo "Unable to retrieve journal entries<br />";
      echo $e->getMessage();
    }
    $entries = $results->fetchAll();
    return $entries;
  }

//Prepare statement to add/edit view for the entry page
/*function get_add_entry($title, $date, $time_spent, $learned, $resources) {
    include 'connection.php';
    include 'functions.php';

    if (isset($entries)) {
        echo $entries['title'];
    
       
    $sql = "INSERT INTO entries($title, $date, $time_spent, $learned, $resources)";
        try {
         $results = $db->prepare($sql);
         $results->bindValue(1,$title, PDO::PARAM_STR);
         $results->bindValue(2,$date, PDO::PARAM_STR);
         $results->bindValue(3,$time_spent, PDO::PARAM_STR);
         $results->bindValue(4,$learned, PDO::PARAM_STR);
         $results->bindValue(5,$resources, PDO::PARAM_STR);
         $results->execute();
                } catch(Exception $e) {
            return $entry;   
                     
        }*/

//Retrieve entries from the database in decending order: Most recent entries first
$results = $db->query("SELECT * FROM entries ORDER BY 'date' DESC");


 ?>
        


