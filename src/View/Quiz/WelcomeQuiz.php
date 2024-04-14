<?php
include_once '../src/controleur/quiz/WelcomeQuizCtrl.php';
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


        <div>
        </div>
    <?php
} else {
    include_once '../src/view/error/restrictedZone.php';
}
