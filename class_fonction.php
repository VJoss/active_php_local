<?php

/**
 * Gère les données de la table Fonction
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Fonction
{    
    /**
     * id_fonction
     *
     * @var mixed
     */
    private $id_fonction;
    private $libelle_fonction;

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

    /**
     * @return mixed
     */
    public function getLibelleFonction()
    {
        return $this->libelle_fonction;
    }

    /**
     * @param mixed $libelle_fonction
     */
    public function setLibelleFonction($libelle_fonction)
    {
        $this->libelle_fonction = $libelle_fonction;
    }

}