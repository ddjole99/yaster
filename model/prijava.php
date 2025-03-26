<?php
class Prijava
{
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($predmet = null, $katedra = null, $sala = null, $datum = null)
    {
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }
    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM prijave";
        echo $query;

        return $conn->query($query);
    }

}




?>