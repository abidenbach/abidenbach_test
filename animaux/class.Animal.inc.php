<?php

    class Animal {

        // champs, attributs, (propriétés PHP)
        private $nom;
        private $espece;
        private $taille;
        private $poids;
        private $estVaccine;

        // accesseurs  
        public function getNom(): string 
        {
            return $this->nom; 
        }

        public function getEspece(): string 
        {
            return $this->espece; 
        }

        public function getTaille(): float
        {
            return $this->taille;
        }

        public function getPoids(): float
        {
            return $this->poids;
        }

        public function estVaccine(): bool
        {
            return $this->estVaccine;
        }

        // constructeur 
        public function __construct(string $pNom, string $pEspece, float $pTaille, float $pPoids)
        {
            $this->nom = $pNom;
            $this->espece = $pEspece;
            $this->taille = $pTaille;
            $this->poids = $pPoids;
            $this->estVaccine = false;
        }

        //  méthode
        public function vacciner(): void
        {
            $this->estVaccine = true;
        }

    } // fin de la classe



?>