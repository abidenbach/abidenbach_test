<?php
class Chat {

    private $nom;
    private $race;
    private $dateNaissance;
    private $cri;

    // accesseurs  
    public function getNom(): string 
    {
        return $this->nom; 
    }

    public function getRace(): string 
    {
        return $this->race; 
    }

    public function getAge(): int
    {
        $dateJour = new DateTime('now');
        $difference = $this->dateNaissance->diff($dateJour);
        return $difference->format('%y');
    }

    // constructeur 
    public function __construct(string $pNom, string $pRace, DateTime  $pDateNaissance, string $pCri = 'Miaou ')
    {
        $this->nom = $pNom;
        $this->race = $pRace;
        $this->dateNaissance = $pDateNaissance;
        $this->cri = $pCri;
    }

    //methode
    public function decrire() : string 
    {
        return sprintf('%s chat de %d ans de race %s .Son cri est %s', $this->nom, $this->getAge(), $this->race, $this->cri);
    }

    public function miauler($nombre = 1): string
    {
        $uneChaine = "";
        for ($i = 1; $i <= $nombre; $i++){
            $uneChaine .= $this->cri . ' ';
        }
        return $uneChaine;
    }
}
?>