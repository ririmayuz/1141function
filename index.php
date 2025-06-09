<!-- <?php //include 'library.php'; ?> -->
 <?php include'db.php';?>
<h2>正三角形</h2>
<style>
    *{
        font-family:'Courier New', Courier, monospace;
    }
</style>
<?php
$rows = all('items');
all($rows);
// stars('正三角形', 15);
// stars('菱形', 15);
// stars('矩形', 15);
// stars('倒三角形', 15);