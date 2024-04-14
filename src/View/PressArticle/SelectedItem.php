<?php
include_once '../src/controleur/PressArticle/SelectedItemCtrl.php';
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
            <div class="col align-self-center">
                <p><?= isset($error) ? $error : '' ?></p>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <h1>Article de presse ayant pour suject <?= $_GET['theme'] ?> </h1>
            <?php
            if ($articleName === false) {
            ?>
                <p>Aucun n'article dans cette catégorie</p>
            <?php } else { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Liens</th>
                            <th scope="col">Date de publication</th>
                            <?php
                            if ($_SESSION['Done'] == 2689) {
                            ?> 
                                <th scope="col">modifier </th>
                                <th scope="col">suprimer </th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        foreach ($articleName as $Article) {
                        ?>
                            <tr>
                                <th scope="row"><?= $Article['Title'] ?></th>
                                <td><a href="<?= $Article['Link'] ?>" target="_blank">liens</a></td>
                                <td><?= $Article['RelaseDate'] ?></td>
                                <?php
                                if ($_SESSION['Done'] == 2689) {
                                ?>
                                    <td><? ?>modif</td>
                                    <td><? ?>delete</td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
        <div>
        </div>
    <?php
} else {
    include_once '../src/view/error/restrictedZone.php';
}
