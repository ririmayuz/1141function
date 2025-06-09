<?php // include 'library.php'; ?>
<?php include 'db.php'; ?>
<h2>Function</h2>
<style>
    *{
        font-family:'Courier New', Courier, monospace;
    }
</style>
<?php

// $rows= all('sales');
// dd($rows);

// $sales= all ('sales',"where quantity >=2");
// dd($sales);

// $all=q("select name, price from items order by price");

//dd(find('items',3));
//dd(find('items',['name'=>'蛋餅','stock'=>50]));

$row=find('items',5);
dd($row);

$row['cost']=15;
$row['prove']=45;
dd($row);

update("items",$row);
/* stars('正三角形', 15);
stars('菱形', 15);
stars('矩形', 15);
stars('倒三角形', 15); */


