<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Новостная лента</title>
</head>

<body>
    <table>
        <tr>
            <td><?php


            foreach($items as $item){

                echo $item['title']."<br>";
                echo $item['short']."<br>";
                echo $item['description']."<br>";
                echo $item['date']."<br>";
               ?>
                <a href="../contr/fullnews.php?id=<?=$item['id']?>">Полная новость</a>
                <?php

            }

                ?></td>
        </tr>
    </table>
</body>
</html>
