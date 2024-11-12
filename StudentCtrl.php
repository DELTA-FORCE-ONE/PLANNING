<?php
require_once('../models/StudentService.php');


$etService = new StudentService();
$action =isset($_GET['action'])? $_GET['action']: (isset($_POST['action'])? $_POST['action']:'');


if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'form') {
    Header('Location:../views/Etudiant/form.php');
    
}

if ($action == 'liste') {
    Header('Location:../views/Etudiant/liste.php');
    
}

if ($action == 'delete') {
    //recuperation des donnees
    $matricule=$_GET['matricule'];

    //appel du model
    $etService->delete($matricule);

    //redirection vers la vue
    Header('Location:../views/Etudiant/liste.php?message=Etudiant supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $ad = $_POST['adress'];
    $email = $_POST['email'];
    
    


    //2. Appel du model
    $etService->add($matricule, $nom, $prenom, $sexe, $email, $ad,);

    //3. appel de la vue
    Header('Location:../views/Etudiant/liste.php?message=Etudiant ajouté');
}


if($action=='editForm'){
    $matricule=$_GET['matricule'];
    Header('Location:../views/Etudiant/edit.php?matricule='.$matricule);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $ad = $_POST['adress'];
    $email = $_POST['email'];
    

    //2. Appel du model
    $etService->edit($matricule, $nom, $prenom, $sexe, $email, $adress);

    //3. appel de la vue
    Header('Location:../views/Etudiant/liste.php?message=Etudiant modifié');
}






















































