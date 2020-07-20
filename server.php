<?php

  include __DIR__ . '/database.php';
  header('Content-Type: application/json');

  if ( !empty($_GET['author']) ) {
    $filtered_array = [];
    foreach ($database as $cd) {
      if ( $cd['author'] === $_GET['author'] ) {
        $filtered_array[] = $cd;
      }
    }
    echo json_encode($filtered_array);
  }else {
    echo json_encode($database);
  }

?>
