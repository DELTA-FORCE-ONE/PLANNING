<?php
require_once('Provider.php');


class studentService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($matricule, $nom, $prenom, $sexe, $email, $adress)
    {
        $requete = 'insert into student (matricule, nom, prenom, sexe, email, adress, ) values (:mat, :nm, :pr, :sx, :em, :ad, )';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'mat' => $matricule,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'em' => $email,
            'ad' => $adress,
            
        ]);



    }

    public function edit($matricule, $nom, $prenom, $sexe, $email, $adress)
    {

        $requete='update student set nom=:nm, prenom=:pr, sexe=:sx, email=:e, adress=:d where matricule=:m';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            'e'=> $email,
            'd'=> $adress,
            'm'=> $matricule
        ]);

    }


    public function getByMatricule($matricule)
    {
        $requete="select * from student where matricule=:mat";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'mat'=> $matricule
        ]);
        $student=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $student[0];
    }

    public function getAll()
    {
        $requete = 'select * from student order by matricule desc';
        $st = $this->connexion->query($requete);
        $student = $st->fetchAll(PDO::FETCH_ASSOC);
        return $student;
    }

    public function delete($matricule)
    {
        $requete='delete from student where matricule=:m';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'm'=> $matricule
        ]);
    }

}