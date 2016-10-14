<?php
include __DIR__ . '/../model/news.php';

    if(!empty($_GET['id'])){

        $fullnews = fullNews();

    }
include __DIR__ . '/../view/fullnews.php';
?>
