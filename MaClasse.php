<?php


class MaClasse
{
    private $unAttributPrive;
    private $TabAttribut=[];

    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666950-les-methodes-magiques#/id/r-1670145
    public  function __get($name)
    {
        if (isset($this->TabAttribut[$name]))
        {
            return $this->TabAttribut[$name];
        }else
        {
            echo '<br/>==', $name,"== Cet attribut n'existe pas ";
        }
    }

    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666950-les-methodes-magiques#/id/r-1670134
    public function __set($name, $value)
    {
        $this->TabAttribut[$name]=$value;
    }
    public function afficher()
    {
        echo '<pre>', print_r($this->TabAttribut,true) ,'</pre>';

    }
}
$set= new MaClasse();

$set ->attribut='Simple test';
$set->unAttributPrive = 'Autre simple test';
$set->afficher();

echo $set->attribut;
echo $set->autreAttribut;

