
<link rel="stylesheet" href="../public/css/materialize.css">
<?php
    session_start();
    require_once '../model/modelCompte.php';
    if ($_SESSION == null)
    {
        header("location:/Peuple/index.php");
    }
    else
    {

        echo '<div class="container">';
        if (isset($_GET['view']))
        {
            switch ($_GET['view'])
            {


                case 'nouveauCompte':
                    $numero = genererNumero();

                    if(isset($_GET['ok'])){
                        if(isset($_GET['ok']) == 1){
                            echo ' COMPTE CREE AVEC SUCCES !!!';
                        }
                    }

                    include 'nouveauCompte.php';

                    break;

            }
        }
        else
        {
            include '../acceuil.php';
        }
        echo '</div>';

    }
    //var_dump($_SESSION);
?>