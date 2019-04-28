
<?php
  require 'common.php';

  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();

  $st2 = $pdo->query("SELECT * FROM onepeace");
  $onepeace = $st2->fetchAll();



  file_put_contents("/tmp/test.log","### START oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↓↓↓¥n",FILE_APPEND);
  file_put_contents("/tmp/test.log", print_r($onepeace, true) ."¥n",FILE_APPEND);
  file_put_contents("/tmp/test.log","### E N D oguri " . date("Y/m/d H:i:s ") . __FILE__ . "(line ".__LINE__.")↑↑↑¥n¥n",FILE_APPEND);  require 't_index.php';
  require 't2_index.php';