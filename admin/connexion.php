<?php
/**
 * Created by PhpStorm.
 * User: pierr
 * Date: 02/01/2017
 * Time: 12:28
 */
include '../includes/header.php';
// Definition des constantes et variables
define('LOGIN', 'admin');
define('PASSWORD', 'root');
$errorMessage = 'Probléme ';

// Test de l'envoi du formulaire
//if (!empty($_POST)) {
    // Les identifiants sont transmis ?
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        // Sont-ils les mêmes que les constantes ?
        if ($_POST['login'] !== LOGIN) {
            $errorMessage = 'Mauvais login !';
        } elseif ($_POST['password'] !== PASSWORD) {
            $errorMessage = 'Mauvais password !';
        } else {
            // On ouvre la session
            session_start();
            // On enregistre le login en session
            $_SESSION['login'] = LOGIN;
            // On redirige vers le fichier admin.php
            header('Location: http://www.just-startup-challenge.fr/admin/dashboard.php');
            exit();
        }
    } else {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
//}
?>

<!DOCTYPE html >
<html xml:lang="fr">
<head>
    <title>Formulaire d'authentification</title>
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/><!-- fontawesome -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/><!-- Bootstrap stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- stylesheet -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
    <script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function () {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->
    <!-- scriptfor smooth drop down-nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //script for smooth drop down-nav -->
</head>
</head>
<body>
<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend>Identifiez-vous</legend>
                <?php
                // Rencontre-t-on une erreur ?
                if (!empty($errorMessage)) {
                    echo '<p>', htmlspecialchars($errorMessage), '</p>';
                }
                ?>
                <div class="form-group">
                    <label for="nom" class="col-sm-2 control-label">Nom </label>
                    <div class="col-sm-8">
                        <p>
                            <label for="login">Login :</label>
                            <input type="text" name="login" id="login" value=""/>
                        </p>
                        <p>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" value=""/>
                        </p>
                        <input type="submit" name="submit" value="Se logguer"/>
                    </div>
                    <div class="col-sm-2 ">

                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>

</body>
</html>


