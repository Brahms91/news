<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","news");

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die();
mysql_select_db(DB_NAME);


function selectnews($sql)
{
   $select_news = [];
   $res = mysql_query($sql);
while(false !== $row = mysql_fetch_assoc($res) ){
   $select_news[] = $row;
}
return $select_news;

}

?>