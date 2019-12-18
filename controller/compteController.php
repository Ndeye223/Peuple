<?php

session_start();
require_once '../model/modelCompte.php';
if (isset($_POST['ajoutCompte'])) {

    extract($_POST);
    $dateCreation = date("d-m-Y");
    $idClient = insererClient($cni, $nom, $prenom, $adresse, $tel);
    $idGestCompte = $_SESSION['idUser'];
    $idCompte = ajoutCompte($numero, $dateCreation, $solde, $idClient, $idGestCompte);

}
if (isset($_POST['trouve'])) {
    $comptes = listeComptes();
    echo json_encode($comptes);
}
if (isset($_GET['action'])){
    $etat = $_GET['action']=="bloquer" ? 0 : 1;
    $idCompte = $_GET['idCompte'];
    updateEtat($etat,$idCompte);
    header("location:/Peuple/view/view2.php?view=compte");
}












