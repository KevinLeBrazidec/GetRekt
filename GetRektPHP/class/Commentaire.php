<?php

class Commentaire {
    private $id;
    private $message;
    private $dateDeCreation;
    private $user;
    private $video;


    function __construct()
    {

    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMessage($value)
    {
        $this->message = $value;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setDateDeCreation($value)
    {
        $this->dateDeCreation = $value;
    }

    public function getDateDeCreation()
    {
        return $this->dateDeCreation;
    }

    public function setUser($value)
    {
        $this->user = $value;
    }

    public function getUser()
    {
        return $this->user;
    }
    
    public function setVideo($value)
    {
        $this->video = $value;
    }

    public function getVideo()
    {
        return $this->video;
    }


}
