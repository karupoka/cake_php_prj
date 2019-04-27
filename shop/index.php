
<?php
  require 'common.php';

  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();

  $st2 = $pdo->query("SELECT * FROM onepeace");
  $onepeace = $st2->fetchAll();

var_dump($onepeace);
  require 't_index.php';
  require 't2_index.php';