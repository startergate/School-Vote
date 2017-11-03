<?php
  require("./config/config.php");
  require("./lib/db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

  $name = mysqli_real_escape_string($conn, 'a');

  $sql = "INSERT INTO `schvote`.`badminton` (`name`) VALUES ('a')";
  $result = mysqli_query($conn, $sql);
  header('Location: ./prg_done.php');
?>
