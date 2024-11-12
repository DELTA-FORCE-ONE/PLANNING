<html>

<head>
    <title>salle de cours</title>
</head>

<body>



<h1>salle de cours</h1>
    <a href="../../controllers/studentCtrl.php?action=liste" >Go to students list</a> <br >
  
    <form action="../../controllers/studentCtrl.php" method="post">
    <input type="hidden" name="action" value="ajout">
    <table  align="center">

<tr>
            <td>SALLE</td>
            <td>
               <!-- H <input type="radio" name="salle"> 
                F <input type="radio" name="salle"> -->

                <select name="salle" required>
                    <option value="">Veuillez choisir votre salle</option>
                    <option value="S1">Salle1</option>
                    <option value="S2">Salle2</option>
                    <option value="S3">Salle3</option>
                    <option value="S4">Salle4</option>
                </select>
            </td>
</tr>
<tr>
            <input type="hidden" name="action" value="ajout">
            <td colspan="2" style="text-align: center">  
<input type='reset' style="background-color: red; color: white" value="VIDER"> 
&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="AJOUTER"></td>
        </tr>
    </table>
    </form>
</body>
    </html>