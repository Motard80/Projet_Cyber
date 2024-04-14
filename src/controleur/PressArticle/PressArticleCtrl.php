<?php

use src\class\model\PressArticleCategoryModel;

$title='Article de presse';
$lsitCategory=new PressArticleCategoryModel;
$CategoryList= $lsitCategory->showAll();
$_SESSION['Message']='';

if(isset($_GET['p'])){
    if(isset($_GET['theme'])){
            $newLocation = "?p=SelectedItem&theme=". $_GET['theme'];
            header("Location: $newLocation", true, 301);
            exit;
        }
}