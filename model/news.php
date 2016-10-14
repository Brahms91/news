<?php
include __DIR__ . '/../function/sql.php';



function indexnNews()
{
    $sql = "SELECT * FROM tape ORDER BY date DESC";
    return  selectNews($sql);
}
function fullNews(){

    $sql = "SELECT  description,img FROM tape WHERE id=$_GET[id]";
    return  SelectFullNews($sql);

}
?>