<?php
require_once('../models/professorService.php');

$etService = new professorService();
$action =isset($_GET['action'])? $_GET['action']: (isset($_POST['action'])? $_POST['action']:'');


if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'form') {
    Header('Location:../views/professor/form.php');
}

if ($action == 'liste') {
    Header('Location:../views/professor/liste.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $matricule=$_GET['matricule'];

    //appel du model
    $etService->delete($matricule);

    //redirection vers la vue
    Header('Location:../views/professor/liste.php?message=Enseignqnt supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $numero = $_POST['numero'];
    $matiere = $_POST['matiere'];
    $nombre_student = $_POST['nombre_student'];


    //2. Appel du model
    $etService->add($matricule, $nom, $prenom, $sexe, $numero, $matiere, $nombre_student);

    //3. appel de la vue
    Header('Location:../views/professor/liste.php?message=Enseignant ajouté');
}


if($action=='editForm'){
    $matricule=$_GET['matricule'];
    Header('Location:../views/professor/edit.php?matricule='.$matricule);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $ad = $_POST['numero'];
    $email = $_POST['matiere'];
    $email = $_POST['nombre_student'];


    //2. Appel du model
    $etService->edit($matricule, $nom, $prenom, $sexe, $numero, $matiere, $nombre_student);

    //3. appel de la vue
    Header('Location:../views/professor/liste.php?message=Enseignant modifié');
}