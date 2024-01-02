<?php

class Contact
{    
    /**
     * id_contact
     *
     * @var mixed
     */
    private $id_contact;
    private $nom_contact;
    private $prenom_contact;
    private $email_contact;
    private $tel_contact;
    private $code_projet;
    private $code_client;

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->id_contact;
    }

    /**
     * @param mixed $id_contact
     */
    public function setIdContact($id_contact)
    {
        $this->id_contact = $id_contact;
    }

    /**
     * @return mixed
     */
    public function getNomContact()
    {
        return $this->nom_contact;
    }

    /**
     * @param mixed $nom_contact
     */
    public function setNomContact($nom_contact)
    {
        $this->nom_contact = $nom_contact;
    }

    /**
     * @return mixed
     */
    public function getPrenomContact()
    {
        return $this->prenom_contact;
    }

    /**
     * @param mixed $prenom_contact
     */
    public function setPrenomContact($prenom_contact)
    {
        $this->prenom_contact = $prenom_contact;
    }

    /**
     * @return mixed
     */
    public function getEmailContact()
    {
        return $this->email_contact;
    }

    /**
     * @param mixed $email_contact
     */
    public function setEmailContact($email_contact)
    {
        $this->email_contact = $email_contact;
    }
    /**
     * @return mixed
     */
    public function getTelContact()
    {
        return $this->tel_contact;
    }

    /**
     * @param mixed $tel_contact
     */
    public function setTelContact($tel_contact)
    {
        $this->tel_contact = $tel_contact;
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