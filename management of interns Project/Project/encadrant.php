<?php
class encadrant {
    private $nom , $prenom , $adress , $domaine , $tel , $idstag ;
    
function __construct($n,$p,$ad,$d,$t,$ids)
{
    $this->nom=$n;
    $this->prenom=$p;
    $this->adress=$ad;
    $this->domaine=$d;
    $this->tel=$t;
    $this->idstag=$ids;
}

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of domaine
     */ 
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set the value of domaine
     *
     * @return  self
     */ 
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of idstag
     */ 
    public function getIdstag()
    {
        return $this->idstag;
    }

    /**
     * Set the value of idstag
     *
     * @return  self
     */ 
    public function setIdstag($idstag)
    {
        $this->idstag = $idstag;

        return $this;
    }
}
?>