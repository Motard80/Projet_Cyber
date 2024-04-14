<?php

use src\class\model\PressArticleModel;

$title='test';
$article= new PressArticleModel;
$RegexNum = '/^\d+$/';
if(isset($_GET['id'])){
    if(preg_match($RegexNum, $_GET['id'])){
        $idCategori=htmlspecialchars($_GET['id']);
    }
    $articleName= $article->findByColumn('id_Press_Article_Category', $idCategori);
    if($articleName===true){
        var_dump('fdfdf');
    }
}