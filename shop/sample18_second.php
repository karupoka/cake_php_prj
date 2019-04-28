<?php
session_start();
?>

<p><?php echo $_SESSION['my_id']; ?>さんの情報はまだ残っています</p>

<p><a href="./sample18_logout.php">ログアウトする</a></p>