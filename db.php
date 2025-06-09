<?php 
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');

function all($table,$where=null){
    global $pdo;
    $sql="SELECT * FROM $table $where";
    echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $rows;

}


function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}