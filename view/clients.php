

<head>
    <title>Banque DU Peuple</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="/material-kit-master/assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
</head>
<body><nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                Banque de l'avenir </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="material-icons">Banque</i> Peuple
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="page-header header-filter" data-parallax="true" style="background-image: url('/material-kit-master/assets/img/landing.jpg';)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand text-center">
                    <h1>Banque Du Peuple</h1>
                    <h3 class="title text-center"></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">

        </div>

    </div>


    <footer class="footer footer-default" >
                    <div class="container">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://www.creative-tim.com/">
                                        <link rel="stylesheet" href="../public/css/materialize.css">
                                        <?php
                                        require_once '../model/modelClients.php';

                                        $listClients = listeClients();
                                        ?>

                                        <div class="container">

                                            <div class="container">

                                                <h5 class="display-4 mb-3">Liste des clients</h5>

                                                <table class="table table-hover">
                                                    <tr>
                                                        <th>CNI</th>
                                                        <th>NOM</th>
                                                        <th>PRENOM</th>
                                                        <th>TELEPHONE</th>
                                                        <th>ADRESSE</th>
                                                        <th>ACTIONS</th>

                                                    </tr>
                                                    <?php
                                                    foreach ($listClients as $c){
                                                        ?>
                                                        <tr>
                                                            <td> <?=$c['cni'] ?> </td>
                                                            <td> <?=$c['nom'] ?> </td>
                                                            <td> <?=$c['prenom'] ?> </td>
                                                            <td> <?=$c['tel'] ?> </td>
                                                            <td> <?=$c['adresse'] ?> </td>

                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--<div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="material-icons">favorite</i> by
                            <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
                        </div>
                    </div>-->
                </footer>
                <!--   Core JS Files   -->
                <script src="/material-kit-master/assets/js/core/jquery.min.js" type="text/javascript"></script>
                <script src="/material-kit-master/assets/js/core/popper.min.js" type="text/javascript"></script>
                <script src="/material-kit-master/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
                <script src="/material-kit-master/assets/js/plugins/moment.min.js"></script>
                <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
                <script src="/material-kit-master/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
                <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                <script src="/material-kit-master/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
                <!--  Google Maps Plugin  -->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                <!-- Place this tag in your head or just before your close body tag.
                <script async defer src="https://buttons.github.io/buttons.js"></script>
                <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
                <script src="/material-kit-master/assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script></body>

