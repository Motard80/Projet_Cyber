<?php

use src\class\model\PressArticleCategoryModel;
use src\class\model\PressArticleModel;

$title='Article de presse - ajout';
$RegexName = '/^[a-zA-ZÀ-ÿ\-\' ]{2,}$/';
$Category= new PressArticleCategoryModel;
$ListCategory= $Category->showAll();
$AddPressAricle= new PressArticleModel;
if(isset($_POST['registration'])){
    if(!empty($_POST['Title'])){
            $NewTitle=htmlspecialchars($_POST['Title']);
            $AddPressAricle->setTitle($NewTitle);
       
    }else{
        //titre vide
    }
    if(!empty($_POST['Link'])){
        $NewLink=htmlspecialchars($_POST['Link']);
        $AddPressAricle->setLink($NewLink);
    }else{
        //Liens manquant
    }
    if(!empty($_POST['RelaseDate'])){
        $NewDate=htmlspecialchars($_POST['RelaseDate']);
        $AddPressAricle->setRelaseDate($NewDate);
    }else{
        //date manquante
    }
    if(!empty($_POST['Category'])){
        $NewCategory=$_POST['Category'];
        $AddPressAricle->setId_Press_Article_Category($NewCategory);
    }else{
        //Categorye non selectioné
    }
    $CheckAddArticle= $AddPressAricle->insert();
    if($CheckAddArticle=== true){
        $newLocation = "?p=PressArticle";
        $_SESSION['Message']='Article Ajouté avec succées';
        header("Location: $newLocation", true, 301);
        exit;
    }
}