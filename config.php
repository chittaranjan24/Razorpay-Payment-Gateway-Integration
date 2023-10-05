<?php 

    session_start();
    define('DBNAME','gateway');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBHOST','localhost:3308');
    try{
        $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Issue -> Connection failed: " . $e->getMessage();
    }

?>