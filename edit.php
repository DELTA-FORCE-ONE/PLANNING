<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification enseignantt</title>
</head>
<body>
    <?php
    if(isset($array['matricule'])){
    $matricule=$array['matricule'];
    require_once('../../models/professorService.php');
    $etService=new professorService();
    $etudiant=$etService->getByMatricule($matricule);
    //var_dump($etudiant);
    
    }
    ?>
<h1>Formulaire modification enseignant </h1>
  
    <form action="../../controllers/professorCtrl.php" method="post">
    <table  align="center">
        <tr>
            <td>MATRICULE</td>
            <td><input type="text" name="matricule"  autocomplete="off" required></td>
        </tr>
        <tr>
            <td>NOM</td>
            <td><input type="text" name="nom" autocomplete="off" required></td>
        </tr>
        <tr>
            <td>PRENOM</td>
            <td><input type="text" name="prenom" required></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td>
               <!-- H <input type="radio" name="sexe"> 
                F <input type="radio" name="sexe"> -->

                <select name="sexe" required>
                    <option value="">Veuillez choisir le sexe de l'enseignant</option>
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td>NUMERO</td>
            <td><input type="numero" name="numero" required></td>
        </tr>

        <tr>
            <td>MATIERE</td>
            <td><input type="text" name="matiere" autocomplete="off" required></td>
        </tr>

        <tr>
            <td>NOMBRE_ETUDIANTS</td>
            <td><input type="text" name="nombre_student" required></td>
        </tr>

        <tr>
            <input type="hidden" name="action" value="modifier">
            <td colspan="2" style="text-align: center">  
            <input type='reset' style="background-color: red; color: white" value="VIDER"> 
&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="MODIFIER"></td>
        </tr>
    </table>
    </form>
</body>
</html>