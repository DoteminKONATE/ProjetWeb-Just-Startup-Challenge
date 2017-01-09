<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Business Strategy a Corporate Business Category Bootstrap Responsive Website Template | Typography ::
        w3layouts</title>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/><!-- fontawesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!-- stylesheet -->
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
<body>
<div class="w3-slider">
    <!-- header -->
    <header>
        <div class="w3layouts-top-strip">
            <div class="container-fluid">
                <div class="w3ls-social-icons">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </div>
                <div class="agileits-contact-info text-right">
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+040 185 999</li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                                href="mailto:info@juststartupchallenge.fr">info@juststartupchallenge.fr</a></li>
                    </ul>
                </div>
                <div class="logo text-center">
                    <h1><a href="index.php">Just Startup Challenge</a></h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!-- //header -->
    <div class="w3layouts-inner-banner">
    </div>
</div>
<div class="clearfix"></div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="../#aproposconcours">A Propos du concours</a></li>
                <li><a href="../#objectifs">Nos objectifs</a></li>
                <li><a href="../#planning">Planning</a></li>
                <li><a class="active" href="inscription.php">Inscription</a></li>
                <li><a href="../#contacts">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- //main-content -->
<div class="wthree-main-content">
    <!-- Typography -->
    <div class="agileits typography">
        <div class="container">
            <h2 class="agile-inner-title">Formulaire d'inscription</h2>
            <div class="typo-grid">
                <div class="typo-1">



                    <div class="grid_3 grid_5">



                        <?php
                        $errorp = $_GET['errorp'];
                        switch ($errorp){
                            case "oui":
                                ?>

                                <div class="alert alert-warning" role="alert">
                                    <strong>Désolé!</strong> Veuillez saisir des informations incorrecte
                                </div>

                                <?php
                                break;
                            case "non":

                                ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Bienvenue!</strong> Votre demande d'inscripton a bien été pris en compte. Après vérification, nous vous informerons
                                    de la validité de votre demande.
                                </div>


                                <?php
                                break;

                                ?>

                                <?php
                        } ?>



                        <section class="w3-about text-center inscription" id="inscription">
                            <div class="tab-content">
                                <div class="tab-pane active" id="horizontal-form">
                                    <form class="form-horizontal" name="inscriptionForme"
                                          action="inscription-action.php" method="post">

                                        <fieldset>
                                            <legend>Informations générales:</legend>

                                            <div class="form-group">
                                                <label for="civilite" class="col-sm-2 control-label">Civilité</label>
                                                <div class="col-sm-8"><select name="civilite" id="civilite"
                                                                              class="form-control1">
                                                        <option value="M">M.</option>
                                                        <option value="Mme">Mme</option>
                                                        <option value="Mlle">Mlle</option>
                                                    </select></div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nom" class="col-sm-2 control-label">Nom </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="nom" id="nom"
                                                           placeholder="Tapez votre Nom" required>
                                                </div>
                                                <div class="col-sm-2 ">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="prenom" class="col-sm-2 control-label">Prenom</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="prenom" id="prenom"
                                                           placeholder="Tapez votre Prenom " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="datenaissace" class="col-sm-2 control-label">Date de
                                                    naissance</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="datenaissace"
                                                           id="datenaissace" placeholder="JJ/MM/AAAA " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="email" id="email"
                                                           placeholder=" Votre Email" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="contact" class="col-sm-2 control-label">Contact</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="contact" id="contact"
                                                           placeholder=" 00 00 00 00 00">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="statusentreprise" class="col-sm-2 control-label">Votre
                                                    Status dans l'entreprise</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="statusentreprise"
                                                           id="statusentreprise"
                                                           placeholder=" Votre Status dans l'entreprise" required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="adresse" class="col-sm-2 control-label">Adresse</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="adresse" id="adresse"
                                                           placeholder="Tapez votre addresse " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="codepostale" class="col-sm-2 control-label">Code
                                                    Postale</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="codepostale"
                                                           id="codepostale" placeholder="Tapez votre code postale "
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="ville" class="col-sm-2 control-label">Ville</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="ville" id="ville"
                                                           placeholder="Tapez votre ville " required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="VotreMotivation" class="col-sm-2 control-label">Votre
                                                    Motivation à participer au concours </label>
                                                <div class="col-sm-8"><textarea name="VotreMotivation"
                                                                                id="VotreMotivation" cols="50" rows="10"
                                                                                class="form-control1" required></textarea></div>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <legend>Informations de l'entreprise:</legend>
                                            <div class="form-group">
                                                <label for="nomEntreprise" class="col-sm-2 control-label">Nom de
                                                    l'entreprise</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="nomEntreprise"
                                                           id="nomEntreprise"
                                                           placeholder="Tapez le nom de votre entreprise  " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tailleEntreprise" class="col-sm-2 control-label">Taille de
                                                    l'entreprise (travailleurs)</label>
                                                <div class="col-sm-8"><select name="tailleEntreprise"
                                                                              id="tailleEntreprise"
                                                                              class="form-control1">
                                                        <option value="1">1 à 8</option>
                                                        <option value="2">9 à 50</option>
                                                        <option value="3">51 et plus</option>
                                                    </select></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="adresseadministrative" class="col-sm-2 control-label">Siège
                                                    Social</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1"
                                                           name="adresseadministrative" id="adresseadministrative"
                                                           placeholder="Tapez votre siège social " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailEntreprise" class="col-sm-2 control-label">Email de
                                                    l'entreprise</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="emailEntreprise"
                                                           id="emailEntreprise" placeholder=" Email de l'entreprise"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="TelephoneEntreprise" class="col-sm-2 control-label">
                                                    Telephone l'entreprise</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" name="TelephoneEntreprise"
                                                           id="TelephoneEntreprise" placeholder=" 00 00 00 00 00"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="descriptionEntreprise" class="col-sm-2 control-label">Descriptif
                                                    de l'entreprise</label>
                                                <div class="col-sm-8"><textarea name="descriptionEntreprise"
                                                                                id="descriptionEntreprise" cols="50"
                                                                                rows="10"
                                                                                class="form-control1" required></textarea></div>
                                            </div>

                                        </fieldset>
                                        <button type="submit" class="btn btn-default btn-block">ENVOYER VOTRE DEMANDE
                                            D'INSCRIPTION
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- // Typography -->
</div>
<!-- //main-content -->
<!-- footer -->
<footer>
    <div class="container">
        <div class="w3ls-footer-grids">
            <div class="col-md-3 w3l-footer-grid">
                <h4>ADDRESS</h4>
                <ul>
                    <li>BS Business Strategy</li>
                    <li>4111 Deer Haven Drive Greenville, SC 29601</li>
                    <li>Hours: Mon-Fri 9am - 6:00pm</li>
                </ul>
            </div>
            <div class="col-md-3 w3l-footer-grid">
                <h4>GET IN TOUCH</h4>
                <ul>
                    <li>Tel: +1 234-567-890</li>
                    <li>Fax: +1 646-216-9789</li>
                    <li>Email: <a href="mailto:info@example.com">info@yourdomain.com </a></li>
                </ul>
            </div>
            <div class="col-md-3 w3l-footer-grid">
                <h4>SUBSCRIBE NOW</h4>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your email" required="required">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="col-md-3 w3l-footer-grid">
                <h4>Copy Rights</h4>
                <p>&copy; 2016 Business Strategy. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                        W3layouts</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
</html>