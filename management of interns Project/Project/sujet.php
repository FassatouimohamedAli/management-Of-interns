<?php
class sujet{
    private  $titre , $description , $domaine ,$etat , $iden ; 


    function __construct($t,$des,$d,$e,$i)
    {
        $this->titre=$t;
        $this->description=$des;
        $this->domaine=$d;
        $this->etat=$e;
        $this->iden=$i;
        
    }
    
    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre($titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

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
     */
    public function setDomaine($domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get the value of etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     */
    public function setEtat($etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of iden
     */
    public function getIden()
    {
        return $this->iden;
    }

    /**
     * Set the value of iden
     */
    public function setIden($iden): self
    {
        $this->iden = $iden;

        return $this;
    }
}
