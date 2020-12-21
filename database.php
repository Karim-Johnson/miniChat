<!-- se connexter à la base de donner et afficher des erreur si necessaire -->
<?php
    $url='localhost';
    $username='root';
    $password='';
    $dbName='minachat';
    try{
        $database=new PDO('mysql:host='.$url.';dbname='.$dbName.';charset=utf8',$username,$password);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        die('Could not Connect My Sql because:' . $e ->getMessage());
    }
?>
