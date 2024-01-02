<?php

/**
 * Client
 */
class Client
{    
    /**
     * code_client
     *
     * @var mixed
     */
    private $code_client;
    private $type_client;
    private $domaine_activite;
    private $nature_activite;
    private $raison_sociale;
    private $chiffre_affaires;
    private $effectifs;
    private $commentaires_commerciaux_client;

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

    /**
     * @return mixed
     */
    public function getTypeClient()
    {
        return $this->type_client;
    }

    /**
     * @param mixed $type_client
     */
    public function setTypeClient($type_client)
    {
        $this->type_client = $type_client;
    }

    /**
     * @return mixed
     */
    public function getDomaineActivite()
    {
        return $this->domaine_activite;
    }

    /**
     * @param mixed $domaine_activite
     */
    public function setDomaineActivite($domaine_activite)
    {
        $this->domaine_activite = $domaine_activite;
    }

    /**
     * @return mixed
     */
    public function getNatureActivite()
    {
        return $this->nature_activite;
    }

    /**
     * @param mixed $nature_activite
     */
    public function setNatureActivite($nature_activite)
    {
        $this->nature_activite = $nature_activite;
    }

    /**
     * @return mixed
     */
    public function getRaisonSociale()
    {
        return $this->raison_sociale;
    }

    /**
     * @param mixed $raison_sociale
     */
    public function setRaisonSociale($raison_sociale)
    {
        $this->raison_sociale = $raison_sociale;
    }

    /**
     * @return mixed
     */
    public function getChiffreAffaires()
    {
        return $this->chiffre_affaires;
    }

    /**
     * @param mixed $chiffre_affaires
     */
    public function setChiffreAffaires($chiffre_affaires)
    {
        $this->chiffre_affaires = $chiffre_affaires;
    }

    /**
     * @return mixed
     */
    public function getEffectifs()
    {
        return $this->effectifs;
    }

    /**
     * @param mixed $effectifs
     */
    public function setEffectifs($effectifs)
    {
        $this->effectifs = $effectifs;
    }

    /**
     * @return mixed
     */
    public function getCommentairesCommerciauxClient()
    {
        return $this->commentaires_commerciaux_client;
    }

    /**
     * @param mixed $commentaires_commerciaux_client
     */
    public function setCommentairesCommerciauxClient($commentaires_commerciaux_client)
    {
        $this->commentaires_commerciaux_client = $commentaires_commerciaux_client;
    }


}