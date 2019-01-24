<<?php
include 'journal.db.sqbpro';
include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyJournal</title>
        <link href="https://fonts.googleapis.com/css?family=Cousine:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/site.css">

        <style>
        body {
            background-color: #FADBD8;
            color: blue            
        } 
        
        
                    
        </style>

    </head>

        <body>    
      
        <section>
            <div class="container">
                <div class="entry-list">
                    <article>
                    <!--<h2><a href="detail.html"><?php echo $sql; ?></a></h2> -->

                        <h2><a href="detail.html">The Best Day I’ve Ever Had</a></h2>
                        <time datetime="2016-01-31">January 31, 2016</time>
                    </article>
                    <article>
                        <h2><a href="detail_2.html">The Absolute Worst Day I’ve Ever Had</a></h2>
                        <time datetime="2016-01-31">January 31, 2016</time>
                    </article>
                    <article>
                        <h2><a href="detail_3.html">That Time at the Mall</a></h2>
                        <time datetime="2016-01-31">January 31, 2016</time>
                    </article>
                    <article>
                        <h2><a href="detail_4.html">"Dude, where’s my car?"</a></h2>
                        <time datetime="2016-01-31">January 31, 2016</time>
                    </article>
                </div>
            </div>
        </section>

         <!-- List of  journal entries displaying the time and date of entries -->
     

<a href="<?php echo 'detail.php'; ?>">Click here for more info</a> 
         

       
        
      