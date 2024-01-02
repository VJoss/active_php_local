<?php

/**
 * Gère les données de la table Document
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Document
{    
    /**
     * id_document
     *
     * @var mixed
     */
    private $id_document;
    private $titre_document;
    private $resume_document;
    private $date_diffusion_document;
    private $code_projet;
    private $matricule;

    /**
     * @return mixed
     */
    public function getIdDocument()
    {
        return $this->id_document;
    }

    /**
     * @param mixed $id_document
     */
    public function setIdDocument($id_document)
    {
        $this->id_document = $id_document;
    }

    /**
     * @return mixed
     */
    public function getTitreDocument()
    {
        return $this->titre_document;
    }

    /**
     * @param mixed $titre_document
     */
    public function setTitreDocument($titre_document)
    {
        $this->titre_document = $titre_document;
    }

    /**
     * @return mixed
     */
    public function getResumeDocument()
    {
        return $this->resume_document;
    }

    /**
     * @param mixed $resume_document
     */
    public function setResumeDocument($resume_document)
    {
        $this->resume_document = $resume_document;
    }

    /**
     * @return mixed
     */
    public function getDateDiffusionDocument()
    {
        return $this->date_diffusion_document;
    }

    /**
     * @param mixed $date_diffusion_document
     */
    public function setDateDiffusionDocument($date_diffusion_document)
    {
        $this->date_diffusion_document = $date_diffusion_document;
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