<?php

try {
$db = new PDO("sqlite:".__DIR__."/database.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) preprare()
   echo ($e->getMessage();
   exit;
}

$stmt = $dtbs->prepare("SELECT" * FROM entries WHERE title = ?, date= ?, time_spent = ?, learned = ? AND resources = ?";
$stmt = bind_param("s", $_POST["title"], $_POST["date"], $_POST["time_spent"], $_POST["learned"], $_POST["resources"] );
$stmt->execute
$stmt->close();