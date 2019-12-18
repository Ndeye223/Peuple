<?php
require_once "model/modelCompte.php";
$listComptes = listeComptes();
?>

<link rel="stylesheet" href="/public/css/materialize.css">

<br>
<table id="listCompte" class="tableauPlein1" cellspacing="0">
    <tr>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th> Prenom Et Nom Client</th>
        <th id="A">ACTIONS</th>
    </tr>
    <?php
    foreach ($listComptes as $c){
        if ($c['etat'] == 0){
            $couleur = "text-danger";
            $activer="";
            $bloquer="disabled";
        }
        else{
            $couleur = "";
            $bloquer = "";
            $activer = "disabled";
        }
        ?>
        <tr class="<?= $couleur ?>">
            <td> <?= $c['numero'] ?> </td>
            <td> <?= $c['dateCreation'] ?> </td>
            <td> <?= $c['solde'] ?> </td>
            <td> <?= ucfirst($c['prenom']) .' '. strtoupper($c['nom']) ?> </td>
            <td class="text-center">
                <a href="/controller/compteController.php?action=bloquer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-danger <?= $bloquer ?>">Bloquer</a>

                <a href="/controller/compteController.php?action=activer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-success <?= $activer ?>">Activer</a>
            </td>
        </tr>
    <?php } ?>

</table>

<br>
<div class="aligner">
    <button class="btn"><a href="/view/nouveauCompte.php">Nouveau Compte</a></button>
</div><br>

