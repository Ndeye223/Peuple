<?php

require_once 'bd.php';
function updateEtat($etat,$idCompte){
    global $bd;
    $sql = "UPDATE compte SET etat = $etat WHERE id=$idCompte";
    $bd->exec($sql);
}

function insererClient($cni, $nom, $prenom, $adresse, $tel)
{
    global $bd;
    //$query = "INSERT INTO ";
    $query = "INSERT INTO client(cni,nom,prenom,adresse,tel) VALUES ('$cni','$nom','$prenom','$adresse','$tel')";
    $reussi = $bd->exec($query);

    if ($reussi) {
        echo 'client ajoute';
    } else {
        echo 'Erreur lors de l\'ajout';
    }
    return $bd->lastInsertId();
}

function ajoutCompte($numero, $dateCreation, $solde, $idClient, $gestCompte)
{
    $query = "INSERT INTO compte VALUES (null,'$numero', '$dateCreation', 0,'$idClient','$gestCompte')";
    global $bd;
    $bd->exec($query);
    return $bd->lastInsertId();
}

function genererNumero()
{

    $sql = "SELECT max(id) FROM compte";
    global $bd;
    $array = $bd->query($sql)->fetch();
    if ($array == NULL) {
        $id = 1;
    } else {
        $array[0]++;
        $id = $array[0];
    }
    $numero = "FSN_" . date('d') . date('m') . date('Y') . "_C" . $id;
    return $numero;
}

function listeComptes()
{
    $sql = "
        SELECT compte.numero, compte.solde, compte.dateCreation, client.prenom, client.nom 
        FROM compte, client
        WHERE compte.idClient = client.id
";
    global $bd;
    return $bd->query($sql)->fetchAll();
}


