<?php
session_start();



function connect() {
    try {
        return new PDO(
            "mysql:host=localhost;dbname=shop", 
            "root",
            "", 
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            )
        );
    } catch (PDOException $e) {

        $error = $e->getMessage();
    
    }

}

// $price = 100;
// $prepare = $dbh->prepare('SELECT name FROM fruit WHERE price = ?');
// $prepare->bindValue(1,(int)$price,PDO::PARAM_INT);
// $prepare->execute();

// $result = $prepare->fetch();
// print_r($result);


function img_tag($code) {
if (file_exists("images/$code.jpg")) $name = $code;
else $name = 'noimage';
return '<img src="images/' . $name . '.jpg" alt="">';
}
?>