<?php
include_once '../src/controleur/PressArticle/AddAnItemCtrl.php';
use src\class\otherClass\Form;
$form = new Form($_POST);
?>
<title><?= isset($title) ? $title : '' ?></title>
<!--fin du head-->
</head>
<header>
    <?php include_once '../src/include/Navbar.php'; ?>
</header>
<?php
if ($_SESSION['Done'] == 2689) { 
    ?>
    <div class="container text-center">
        <div class="row">
            <div class="'col align-self-left">
            </div>
            <div class="col align-self-center">
                <p><?= isset($error) ? $error : '' ?></p>
                <p><?isset($_SESSION['Message'])?$_SESSION['Message']:'' ?></p>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <h1>Ajouter un  article de presse </h1>
        </div>
        <div>
        <form action="" method="post" id="formConnexion"> 
            <div>
                <?= $form->inputText( 'Title', 'Title', 'Title', 'Titre de l\'article'); ?>   
            </div>
            <div>
                <?= $form->inputText( 'Link', 'Link', 'Link', 'Liens vers l\'artilce'); ?>   
            </div>
            <div>
                <?= $form->date('RelaseDate', 'RelaseDate', 'Date de parution') ?>
            </div>
            <div>
                <?= $form->select('Category','Category', 'Selecetioné la catégorie de l\'article','CategoryArticle', $ListCategory, 'Liste','id','Name') ?>
            </div>
            <div>
                <?= $form->submit('S\'enregistrer', 'registration', 'registration'); ?>
            </div>
        </form>
        </div>

        <div>
    </div>
<?php
} else {
    include_once '../src/view/error/restrictedZone.php';
}
?>