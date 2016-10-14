<?php
$date = date("d-m-y , H:i:s");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новостная лента</title>
</head>

<body>

<form action="../contr/addnews.php" enctype="multipart/form-data" method="post">
    <label for="news_name">Имя новости:</label><br>
        <input type="text" id="news_name" name="name" size="25"/><br><br>
    
    <label for="news_img">Вставить картинку:</label><br>
        <input type="file"  id="news_img" name="img"/><br><br>
        <input type="hidden" name="date" value="<?php $date?>">
    
    <label for="short_news">Краткое Описание:</label><br>
        <textarea rows="10" cols="27" id="short_news" name="short" ></textarea><br><br>
    
    <label for="description_news">Описание:</label><br>
        <textarea rows="10" cols="27" id="description_news" name="description" ></textarea><br><br>
        <input type="submit" name="submit" value="Добавить">
</form>

</body>
</html>
