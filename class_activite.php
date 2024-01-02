<?php

/**
 * Gère les données de la table Active
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Activite
{    
    /**
     * id_active
     *
     * @var mixed
     */
    private $id_active;
    private $libelle_activite;

    /**
     * @return mixed
     */
    public function getIdActive()
    {
        return $this->id_active;
    }

    /**
     * @param mixed $id_active
     */
    public function setIdActive($id_active)
    {
        $this->id_active = $id_active;
    }

    /**
     * @return mixed
     */
    public function getLibelleActivite()
    {
        return $this->libelle_activite;
    }

    /**
     * @param mixed $libelle_activite
     */
    public function setLibelleActivite($libelle_activite)
    {
        $this->libelle_activite = $libelle_activite;
    }

}