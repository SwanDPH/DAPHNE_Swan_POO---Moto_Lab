<?php
class User
{
    protected ?int $id;
    protected string $username;
    protected string $nom;
    protected string $prenom;
    protected string $mot_de_passe;
    protected string $email;  

    public function __construct($id, $username, $nom, $prenom, $mot_de_passe,$email)
{
    $this->id = $id;
    $this->username = $username;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mot_de_passe = $mot_de_passe;
    $this->email = $email;
}

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of mot_de_passe
     */ 
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    /**
     * Set the value of mot_de_passe
     *
     * @return  self
     */ 
    public function setMot_de_passe($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

?>