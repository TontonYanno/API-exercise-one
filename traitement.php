<?php
    class Personne{
        protected $nom;
        protected $prenom;
        protected $age;

        public function __construct($nom, $prenom,$age) {
            $this->nom = $nom;;
            $this ->prenom= $prenom;
            $this->age=$age;
        }

        public function getNom(){
            return $this->nom;  
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getAge(){
            return $this->age;
        }
    
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once"../miniProject/connexion.php";
        $personne1 = new Personne($_POST["nom"],$_POST["prenom"],$_POST["age"]);
        $info=[$personne1->getNom(),$personne1->getPrenom(), $personne1->getAge()];
        
        // echo"les info sur la personne1 sont {$info[0]} {$info[1]} {$info[2]}";

        $bd='INSERT INTO `personne` ( `nom`, `prenom`, `age`) VALUES ( :nom, :prenom, :age)';
        $req=$connexion->prepare($bd);
        $req->bindValue(':nom', $info[0]);
        $req->bindValue(':prenom',$info[1]);
        $req->bindValue(':age',$info[2]);
         
        $req->execute();
        
        require_once '../miniProject/index.html';

    }

?>

        

        


        
        
    
