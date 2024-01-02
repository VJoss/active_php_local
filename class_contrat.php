<?php

/**
 * Contrat
 */
class Contrat
{    
    /**
     * id_contrat
     *
     * @var mixed
     */
    private $id_contrat;
    private $date_debut_contrat;
    private $date_fin_contrat;
    private $libelle_contrat;
    private $salaire;
    private $type;
    private $matricule;

    /**
     * @return mixed
     */
    public function getIdContrat()
    {
        return $this->id_contrat;
    }

    /**
     * @param mixed $id_contrat
     */
    public function setIdContrat($id_contrat)
    {
        $this->id_contrat = $id_contrat;
    }

    /**
     * @return mixed
     */
    public function getDateDebutContrat()
    {
        return $this->date_debut_contrat;
    }

    /**
     * @param mixed $date_debut_contrat
     */
    public function setDateDebutContrat($date_debut_contrat)
    {
        $this->date_debut_contrat = $date_debut_contrat;
    }

    /**
     * @return mixed
     */
    public function getDateFinContrat()
    {
        return $this->date_fin_contrat;
    }

    /**
     * @param mixed $date_fin_contrat
     */
    public function setDateFinContrat($date_fin_contrat)
    {
        $this->date_fin_contrat = $date_fin_contrat;
    }

    /**
     * @return mixed
     */
    public function getLibelleContrat()
    {
        return $this->libelle_contrat;
    }

    /**
     * @param mixed $libelle_contrat
     */
    public function setLibelleContrat($libelle_contrat)
    {
        $this->libelle_contrat = $libelle_contrat;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

}