<?php
class stagiaire
{
    private $nom, $prenom, $cin, $adress, $tel, $niveau, $scolarite;
    function __construct($n, $p, $c, $ad, $t, $niv, $s)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->cin = $c;
        $this->adress = $ad;
        $this->tel = $t;
        $this->niveau = $niv;
        $this->scolarite = $s;
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
     *
     * @return  self
     */
    public function setNom($nom)
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
     *
     * @return  self
     */
    public function setPrenom($prenom)
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
     * Get the value of niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of scolarite
     */
    public function getScolarite()
    {
        return $this->scolarite;
    }

    /**
     * Set the value of scolarite
     *
     * @return  self
     */
    public function setScolarite($scolarite)
    {
        $this->scolarite = $scolarite;

        return $this;
    }

    /**
     * Get the value of cin
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     */
    public function setCin($cin): self
    {
        $this->cin = $cin;

        return $this;
    }
}
