<?php
include __DIR__ . '/../function/sql.php';



function indexnNews()
{
    $sql = "SELECT * FROM tape";
    return  selectNews($sql);
}
?>