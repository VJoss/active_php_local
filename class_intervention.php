<?php

/**
 * Gère les données de la table Intervention
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Intervention
{    
    /**
     * id_intervention
     *
     * @var mixed
     */
    private $id_intervention;
    private $date_debut_intervention;
    private $date_fin_intervention;
    private $libelle_intervention;
    private $matricule;
    private $num_lot;
    private $id_fonction;

    /**
     * @return mixed
     */
    public function getIdIntervention()
    {
        return $this->id_intervention;
    }

    /**
     * @param mixed $id_intervention
     */
    public function setIdIntervention($id_intervention)
    {
        $this->id_intervention = $id_intervention;
    }

    /**
     * @return mixed
     */
    public function getDateDebutIntervention()
    {
        return $this->date_debut_intervention;
    }

    /**
     * @param mixed $date_debut_intervention
     */
    public function setDateDebutIntervention($date_debut_intervention)
    {
        $this->date_debut_intervention = $date_debut_intervention;
    }

    /**
     * @return mixed
     */
    public function getDateFinIntervention()
    {
        return $this->date_fin_intervention;
    }

    /**
     * @param mixed $date_fin_intervention
     */
    public function setDateFinIntervention($date_fin_intervention)
    {
        $this->date_fin_intervention = $date_fin_intervention;
    }

    /**
     * @return mixed
     */
    public function getLibelleIntervention()
    {
        return $this->libelle_intervention;
    }

    /**
     * @param mixed $libelle_intervention
     */
    public function setLibelleIntervention($libelle_intervention)
    {
        $this->libelle_intervention = $libelle_intervention;
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

    /**
     * @return mixed
     */
    public function getNumLot()
    {
        return $this->num_lot;
    }

    /**
     * @param mixed $num_lot
     */
    public function setNumLot($num_lot)
    {
        $this->num_lot = $num_lot;
    }

    /**
     * @return mixed
     */
    public function getIdFonction()
    {
        return $this->id_fonction;
    }

    /**
     * @param mixed $id_fonction
     */
    public function setIdFonction($id_fonction)
    {
        $this->id_fonction = $id_fonction;
    }

}