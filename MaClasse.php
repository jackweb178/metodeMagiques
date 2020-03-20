<?php


class MaClasse
{
    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666950-les-methodes-magiques#/id/r-1670186
    public function __call($name, $arguments)
    {
        echo 'La methode <strong>',$name,'</strong> a ete appele alors quelle nexiste pas et ces argument sont : <strong>',implode($arguments,'</strong>,<strong>'),'</strong>';
    }
}
$obj=new MaClasse();
$obj->methode(123,'test');