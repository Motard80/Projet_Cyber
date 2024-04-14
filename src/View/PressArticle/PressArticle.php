<?php
include_once '../src/controleur/PressArticle/PressArticleCtrl.php';
?>
<title><?= isset($title) ? $title : '' ?></title>
<!--fin du head-->
</head>
<header>
    <?php include_once '../src/include/Navbar.php'; ?>
</header>
<?php
if ($_SESSION['Done'] == 2689 || $_SESSION['Done'] == 252 || $_SESSION['Done'] == 250) {
?>
    <div class="container text-center">
        <div class="row">
            <div>
                <p><?= isset($_SESSION['Message']) ? $_SESSION['Message'] : '' ?></p>

            </div>

            <?php
            if ($_SESSION['Done'] == 2689) {
            ?>
                <div class="'col align-self-left">
                    <a href="?p=AddArticle">Ajouter un article</a>
                </div>

            <?php
            }
            ?>
            <div class="col align-self-center">
                <p><?= isset($error) ? $error : '' ?></p>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <h1>Article de presse</h1>
            <?php
            foreach ($CategoryList as $Category=>$ValueCategory) {
            ?>
            <form>
            <button  class="green-button" value="<?= $ValueCategory['id'] ?>" name="<?= $ValueCategory['Name'] ?>"><a href="?p=SelectedItem&theme=<?= $ValueCategory['Name'] ?>&id=<?= $ValueCategory['id'] ?>"><?= $ValueCategory['Name'] ?></a></button>
            <?php
            }
            ?>
        </div>

        <div>
        </div>
    <?php
} else {
    include_once '../src/view/error/restrictedZone.php';
}
