<?php


class Connexion
{
    protected  $pdo,$serveur,$utilisateur,$motDePass , $dataBase;

    /**
     * Connexion constructor.
     */
    public function __construct($serveur, $utilisateur, $motDePass, $dataBase)
    {
        $this->serveur = $serveur;
        $this->utilisateur = $utilisateur;
        $this->motDePass = $motDePass;
        $this->dataBase = $dataBase;
    }

    protected  function connexionBDD()
    {
        $this->pdo=new PDO('mysql:host='.$this->serveur.';dbname='.$this->dataBase,$this->utilisateur,$this->motDePass);
    }

    public  function __sleep()
    {
        return ['serveur','utilisateur','motDePass','dataBase'];
    }
    public function __wakeup()
    {
        $this->connexionBDD();
    }
}
$connexion= new Connexion('localhost','root','','poo');
//var_dump($connexion);
$_SESSION['connexion'] = serialize($connexion);
var_dump($_SESSION['connexion']);echo '<br/>';

// Avec unserialize() on reconvertis lobjet $connexion a son etat dorigine
$connexion= unserialize($_SESSION['connexion']);
var_dump($connexion);

