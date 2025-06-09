<?php 
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');

function all($table,$where=null){
    global $pdo;
    $sql="SELECT * FROM $table $where";
    //echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

}


function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function find($table,$id){
    global $pdo;

    if(is_array($id)){
        $tmp=array2sql($id);
        $sql="SELECT * FROM $table WHERE ".join(" AND ",$tmp);
    }else{
        $sql="SELECT * FROM $table WHERE id='$id'";
    }

    //echo  $sql;

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function update($table,$data){
    global $pdo;
    $tmp=array2sql($data);

    $sql="UPDATE $table SET ".join(" , ",$tmp)."
                      WHERE id='{$data['id']}'";
    
     echo $sql;
    return $pdo->exec($sql);

}

function insert($table,$data){
    global $pdo;
    $keys=array_keys($data);

    $sql="INSERT INTO $table (`".join("`,`",$keys)."`) values('".join("','",$data)."');";
    echo $sql;
    return $pdo->exec($sql);
}

function save($table,$data){
    if(isset($data['id'])){
        update($table,$data);
    }else{
        insert($table,$data);
    }
}

function array2sql($array){
    $tmp=[];
    foreach($array as $key=>$value){
        $tmp[]="`$key`='$value'";

    }
    return $tmp;
}


function q($sql){
    global $pdo;

    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
}