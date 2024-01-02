<?php

/**
 * Gère les données de la table Etape
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Etape
{    
    /**
     * num_lot
     *
     * @var mixed
     */
    private $num_lot;
    private $charge_estimee;
    private $charge_reelle_prod;
    private $charge_reelle_validation;
    private $id_activite;
    private $code_projet;

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
    public function getChargeEstimee()
    {
        return $this->charge_estimee;
    }

    /**
     * @param mixed $charge_estimee
     */
    public function setChargeEstimee($charge_estimee)
    {
        $this->charge_estimee = $charge_estimee;
    }

    /**
     * @return mixed
     */
    public function getChargeReelleProd()
    {
        return $this->charge_reelle_prod;
    }

    /**
     * @param mixed $charge_reelle_prod
     */
    public function setChargeReelleProd($charge_reelle_prod)
    {
        $this->charge_reelle_prod = $charge_reelle_prod;
    }

    /**
     * @return mixed
     */
    public function getChargeReelleValidation()
    {
        return $this->charge_reelle_validation;
    }

    /**
     * @param mixed $charge_reelle_validation
     */
    public function setChargeReelleValidation($charge_reelle_validation)
    {
        $this->charge_reelle_validation = $charge_reelle_validation;
    }

    /**
     * @return mixed
     */
    public function getIdActivite()
    {
        return $this->id_activite;
    }

    /**
     * @param mixed $id_activite
     */
    public function setIdActivite($id_activite)
    {
        $this->id_activite = $id_activite;
    }

    /**
     * @return mixed
     */
    public function getCodeProjet()
    {
        return $this->code_projet;
    }

    /**
     * @param mixed $code_projet
     */
    public function setCodeProjet($code_projet)
    {
        $this->code_projet = $code_projet;
    }

}