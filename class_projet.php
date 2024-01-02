<?php

/**
 * Gère les données de la table Projet
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Projet
{    
    /**
     * code_projet
     *
     * @var mixed
     */
    private $code_projet;
    private $libelle_long_projet;
    private $libelle_court_projet;
    private $type_projet;
    private $cycle_vie_projet;
    private $infos_techniques_projet;
    private $charge_estimee_projet;
    private $remarques_estimation_projet;
    private $date_debut_prevue;
    private $date_fin_prevue;
    private $date_debut_reelle;
    private $date_fin_reelle;
    private $equipe_max_projet;
    private $commentaires_commerciaux_projet;
    private $secteur_activite;
    private $matricule;
    private $code_client;

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

    /**
     * @return mixed
     */
    public function getLibelleLongProjet()
    {
        return $this->libelle_long_projet;
    }

    /**
     * @param mixed $libelle_long_projet
     */
    public function setLibelleLongProjet($libelle_long_projet)
    {
        $this->libelle_long_projet = $libelle_long_projet;
    }

    /**
     * @return mixed
     */
    public function getLibelleCourtProjet()
    {
        return $this->libelle_court_projet;
    }

    /**
     * @param mixed $libelle_court_projet
     */
    public function setLibelleCourtProjet($libelle_court_projet)
    {
        $this->libelle_court_projet = $libelle_court_projet;
    }

    /**
     * @return mixed
     */
    public function getTypeProjet()
    {
        return $this->type_projet;
    }

    /**
     * @param mixed $type_projet
     */
    public function setTypeProjet($type_projet)
    {
        $this->type_projet = $type_projet;
    }

    /**
     * @return mixed
     */
    public function getCycleVieProjet()
    {
        return $this->cycle_vie_projet;
    }

    /**
     * @param mixed $cycle_vie_projet
     */
    public function setCycleVieProjet($cycle_vie_projet)
    {
        $this->cycle_vie_projet = $cycle_vie_projet;
    }

    /**
     * @return mixed
     */
    public function getInfosTechniquesProjet()
    {
        return $this->infos_techniques_projet;
    }

    /**
     * @param mixed $infos_techniques_projet
     */
    public function setInfosTechniquesProjet($infos_techniques_projet)
    {
        $this->infos_techniques_projet = $infos_techniques_projet;
    }

    /**
     * @return mixed
     */
    public function getChargeEstimeeProjet()
    {
        return $this->charge_estimee_projet;
    }

    /**
     * @param mixed $charge_estimee_projet
     */
    public function setChargeEstimeeProjet($charge_estimee_projet)
    {
        $this->charge_estimee_projet = $charge_estimee_projet;
    }

    /**
     * @return mixed
     */
    public function getRemarquesEstimationProjet()
    {
        return $this->remarques_estimation_projet;
    }

    /**
     * @param mixed $remarques_estimation_projet
     */
    public function setRemarquesEstimationProjet($remarques_estimation_projet)
    {
        $this->remarques_estimation_projet = $remarques_estimation_projet;
    }

    /**
     * @return mixed
     */
    public function getDateDebutPrevue()
    {
        return $this->date_debut_prevue;
    }

    /**
     * @param mixed $date_debut_prevue
     */
    public function setDateDebutPrevue($date_debut_prevue)
    {
        $this->date_debut_prevue = $date_debut_prevue;
    }

    /**
     * @return mixed
     */
    public function getDateFinPrevue()
    {
        return $this->date_fin_prevue;
    }

    /**
     * @param mixed $date_fin_prevue
     */
    public function setDateFinPrevue($date_fin_prevue)
    {
        $this->date_fin_prevue = $date_fin_prevue;
    }

    /**
     * @return mixed
     */
    public function getDateDebutReelle()
    {
        return $this->date_debut_reelle;
    }

    /**
     * @param mixed $date_debut_reelle
     */
    public function setDateDebutReelle($date_debut_reelle)
    {
        $this->date_debut_reelle = $date_debut_reelle;
    }

    /**
     * @return mixed
     */
    public function getDateFinReelle()
    {
        return $this->date_fin_reelle;
    }

    /**
     * @param mixed $date_fin_reelle
     */
    public function setDateFinReelle($date_fin_reelle)
    {
        $this->date_fin_reelle = $date_fin_reelle;
    }

    /**
     * @return mixed
     */
    public function getEquipeMaxProjet()
    {
        return $this->equipe_max_projet;
    }

    /**
     * @param mixed $equipe_max_projet
     */
    public function setEquipeMaxProjet($equipe_max_projet)
    {
        $this->equipe_max_projet = $equipe_max_projet;
    }

    /**
     * @return mixed
     */
    public function getCommentairesCommerciauxProjet()
    {
        return $this->commentaires_commerciaux_projet;
    }

    /**
     * @param mixed $commentaires_commerciaux_projet
     */
    public function setCommentairesCommerciauxProjet($commentaires_commerciaux_projet)
    {
        $this->commentaires_commerciaux_projet = $commentaires_commerciaux_projet;
    }

    /**
     * @return mixed
     */
    public function getSecteurActivite()
    {
        return $this->secteur_activite;
    }

    /**
     * @param mixed $secteur_activite
     */
    public function setSecteurActivite($secteur_activite)
    {
        $this->secteur_activite = $secteur_activite;
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
    public function getCodeClient()
    {
        return $this->code_client;
    }

    /**
     * @param mixed $code_client
     */
    public function setCodeClient($code_client)
    {
        $this->code_client = $code_client;
    }

}