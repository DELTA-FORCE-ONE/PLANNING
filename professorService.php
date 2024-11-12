<?php
require_once('Provider.php');
require_once('salle');

class professorService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($matricule, $nom, $prenom, $sexe, $numero, $matiere, $nombre_student)
    {
        $requete = 'insert into professor (matricule, nom, prenom, sexe, numero, matiere, nombre_student) values (:mat, :nm, :pr, :sx, :nr, :ma, :nbe)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'mat' => $matricule,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'nr' => $numero,
            'ma' => $matiere,
            'nbe' =>$nombre_student
        ]);



    }

    public function edit($matricule, $nom, $prenom, $sexe, $nr, $ma, $nbe)
    {

        $requete='update professor set nom=:nm, prenom=:pr, sexe=:sx, numero=:n, matiere=:ma, nombre_student=:nb where matricule=:m';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            'n'=> $numero,
            'ma'=> $matiere,
            'nb'=>$nombre_student,
            'm'=> $matricule
        ]);

    }


    public function getByMatricule($matricule)
    {
        $requete="select * from professor where matricule=:mat";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'mat'=> $matricule
        ]);
        $professor=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $professor[0];
    }

    public function getAll()
    {
        $requete = 'select * from professor order by matricule desc';
        $st = $this->connexion->query($requete);
        $professor = $st->fetchAll(PDO::FETCH_ASSOC);
        return $professor;
    }

    public function delete($matricule)
    {
        $requete='delete from professor where matricule=:m';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'm'=> $matricule
        ]);
    }

}