<?php 

/**
 * Gère les données de la table Collaborateur
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Collaborateur{    
    /**
     * matricule
     *
     * @var mixed
     */
    private $matricule;
    private $nom_collaborateur;
    private $prenom_collaborateur;
    private $sexe_collaborateur;
    private $etat_civil_collaborateur;
    private $id_fonction;

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @return mixed
     */
    public function getNomCollaborateur()
    {
        return $this->nom_collaborateur;
    }

    /**
     * @return mixed
     */
    public function getPrenomCollaborateur()
    {
        return $this->prenom_collaborateur;
    }

    /**
     * @return mixed
     */
    public function getSexeCollaborateur()
    {
        return $this->sexe_collaborateur;
    }

    /**
     * @return mixed
     */
    public function getEtatCivilCollaborateur()
    {
        return $this->etat_civil_collaborateur;
    }

    /**
     * @return mixed
     */
    public function getIdFonction()
    {
        return $this->id_fonction;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @param mixed $nom_collaborateur
     */
    public function setNomCollaborateur($nom_collaborateur)
    {
        $this->nom_collaborateur = $nom_collaborateur;
    }

    /**
     * @param mixed $prenom_collaborateur
     */
    public function setPrenomCollaborateur($prenom_collaborateur)
    {
        $this->prenom_collaborateur = $prenom_collaborateur;
    }

    /**
     * @param mixed $sexe_collaborateur
     */
    public function setSexeCollaborateur($sexe_collaborateur)
    {
        $this->sexe_collaborateur = $sexe_collaborateur;
    }

    /**
     * @param mixed $etat_civil_collaborateur
     */
    public function setEtatCivilCollaborateur($etat_civil_collaborateur)
    {
        $this->etat_civil_collaborateur = $etat_civil_collaborateur;
    }

    /**
     * @param mixed $id_fonction
     */
    public function setIdFonction($id_fonction)
    {
        $this->id_fonction = $id_fonction;
    }

}