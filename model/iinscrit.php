<?php
    class inscrit
    {
        private $id;
        private $nom;
        private $prenom;
        private $date;
        private $email;
        private $mdp;
        public function __construct($id, $nom, $prenom, $date, $email, $mdp)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date = $date;
            $this->email = $email;
            $this->mdp = $mdp;  
        }
        public function getId()
        {
            return $this->id;
        }
        public function getNom()
        {
            return $this->nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function getDate()
        {
            return $this->date;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getMdp()
        {
            return $this->mdp;
        }
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        public function setDate($date)
        {
            $this->date = $date;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setMdp($mdp)
        {
            $this->mdp = $mdp;
        }
    }
?>