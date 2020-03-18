<?php


class MaClasse
{
    private $unAttributPrive;
    private $TabAttribut=[];

    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666950-les-methodes-magiques#/id/r-1670134
    public function __set($name, $value)
    {
        //echo "lattribut est <strong>", $name, "</strong> et la valeur est :  <strong>", $value, " </strong><br>";
        $this->TabAttribut[$name]=$value;
    }
    public function afficher()
    {
        echo '<pre>', print_r($this->TabAttribut) ,'</pre>';
    }

    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666950-les-methodes-magiques#/id/r-1670145
    public  function __get($name)
    {
        return "Impossible dacceder a lattribut <strong> $name </strong> ,desole !<br/>";
    }

}
$set= new MaClasse();

$set ->attribut='Simple test';
$set->unAttributPrive = 'Autre simple test';
$set->afficher();

$get=new MaClasse;

echo $get->attribut;
echo $get->unAttributPrive;
