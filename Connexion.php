<?php


class Connexion
{
    protected  $pdo,$serveur,$utilisateur,$motDePass , $dataBase;

    /**
     * Connexion constructor.
     */
    public function __construct($pdo, $serveur, $utilisateur, $motDePass, $dataBase)
    {
        $this->pdo = $pdo;
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

}