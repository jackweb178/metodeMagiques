<?php


class MaClasse
{
//    private     $unAttributPrive ;
//    public function __set($name, $value)
//    {
//        echo "lattribut est <strong>",$name,"</strong> et la valeur est :  <strong>",$value," </strong><br>";
//    }
    private $tab=[];

    public function __set($name, $value)
    {
        $this->tab[$name]=$value;
    }

    public function afficherAttribut()
    {
        echo '<pre>',print_r($this->tab),'</pre>';
    }

}
$obj=new MaClasse();
$obj->attribut='Simple test';
$obj->unAttributPrive='Autre simple test';

$obj->afficherAttribut();