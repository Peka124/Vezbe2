<?php

class Korisnik
{
    public $id;
    public $un;
    public $ps;

    public function __construct($id=null, $un=null, $ps=null)
    {
        $this->id=$id;
        $this->un=$un;
        $this->ps=$ps;
    }

    public static function prijavljivanjeKorisnika($usn, mysqli $konn)
    {
        //Polja username i password su iz baze
        $q="SELECT * FROM Korisnik WHERE username=$usn->un and password=$usn->ps";//Konekcija sa bazom
        //Sledeci korak je index.php, treba da se get-uje korisnik i prijavi
        return true;
    }

}



?>