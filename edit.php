<?php
include 'connection.php'; 

    //Update and/or edit entries, giving all entries a unique key
   if(!empty($_GET['id'])) {
            $entry_id = $_GET['id'];

            try {
            $results = $db->prepare('SELECT * FROM entries WHERE id = ?');
            try {
                $results = $db->prepare($sql);
                $results->bindValue(1,$title, PDO::PARAM_STR);
                $results->bindValue(2,$date, PDO::PARAM_STR);
                $results->bindValue(3,$time_spent, PDO::PARAM_STR);
                $results->bindValue(4,$learned, PDO::PARAM_STR);
                $results->bindValue(5,$resources, PDO::PARAM_STR);
                $results->execute();
            } catch(Exception $e) {
                echo $e-getMessag();
                die();

                $entries = $results->fetch(PDO::FETCH_ASSOC); 


           // $entry = $results->fetch(PDO::FETCH_ASSOC);
           // return $results;

        }
    ?>


<!DOCTYPE html>
<!--<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyJournal</title>
        <link href="https://fonts.googleapis.com/css?family=Cousine:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="site-header">
                    <a class="logo" href="index.php"><i class="material-icons">library_books</i></a>
                    <a class="button icon-right" href="new.html"><span>New Entry</span> <i class="material-icons">add</i></a>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="edit-entry"> -->
                    <h2>Edit Entry</h2>
                    <form>
                        <label for="title"> Title</label>
                        <input id="title" type="text" name="title"><br>
                        <label for="date">Date</label>
                        <input id="date" type="date" name="date"><br>
                        <label for="time-spent"> Time Spent</label>
                        <input id="time-spent" type="text" name="timeSpent"><br>
                        <label for="what-i-learned">What I Learned</label>
                        <textarea id="what-i-learned" rows="5" name="whatILearned"></textarea>
                        <label for="resources-to-remember">Resources to Remember</label>
                        <textarea id="resources-to-remember" rows="5" name="ResourcesToRemember"></textarea>
                        <input type="submit" value="Publish Entry" class="button">
                        <a href="#" class="button button-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </section>
        <!--<footer>
            <div>
                &copy; MyJournal
            </div>
        </footer>
    </body>
</html> -->