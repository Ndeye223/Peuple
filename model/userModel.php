
<?php
/*
require_once 'bd.php';

function verifierConnexion($login, $mdp)
{
    $sql = "SELECT * FROM utilisateur WHERE login='$login' AND password = '$mdp'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
/*
function insererUtilisateur($id, $nom, $prenom, $login, $password, $profil)
{
    global $bd;
    $query = "INSERT INTO utilisateur (nom,prenom,login,password,profil) VALUES ('$nom','$prenom','$login','$password','$profil')";
    //insert into client values(null$nom,$prenom,$login,$password,$profil);
    $reussi = $bd->query($query);
    if ($reussi) {
        echo 'utilisateur ajoute';
    } else {
        echo "ERREUR LORS DE L'AJOUT DE L'UTILISATEUR";
    }
}

*/