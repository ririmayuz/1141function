<?php
$dsn='mysql:host=localhost;dbname=store;charset=utf8';
$pdo=new PDO($dsn,'root','');

function all($table){
    //echo "回傳指定資料表$table 的全部內容";
    global  $pdo;
    $sql= "SELECT * FORM $table";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $rows;
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}


?>