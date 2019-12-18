
<?php
session_start();

if (isset($_POST['connexion'])) {

        header('location:/mesprojets/Peuple/acceuil.php');
}

/*
$id = NULL;
$nom = $_POST['nom'];
$pnom = $_POST['prenom'];
$log = $_POST['login'];
$mdpass = $_POST['mdp'];
$profil = filter_input(INPUT_POST, 'profil');
insererUtilisateur($id, $nom, $pnom, $log, $mdpass, $profil);
*/



