<?php

class User
{
    private string $id_user;
    private string $name;
    private string $firstname;
    private string $email;
    private string $password;
    private string $token;
    private int $active;
    private int $id_role;
    private string $image_user;
    private string $job_title;
    private string $description;
    private string $fb;
    private string $twitter;
    private string $linkedin;

    public function __construct()
    {

    }

    // Getters and setters
    public function getName()
    {
        return $this->name ?? "";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getFirstName()
    {
        return $this->firstname ?? "";
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getIdRole()
    {
        return $this->id_role;
    }

    public function setIdRole()
    {
        $this->id_role;
    }

    public function getImageUser()
    {
        return $this->image_user;
    }

    public function setImageUser($image_user)
    {
        $this->image_user = $image_user;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getJobTitle()
    {
        return $this->job_title;
    }

    public function setJobTitle($job_title)
    {
        $this->job_title = $job_title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFb()
    {
        return $this->fb;
    }

    public function setFb($fb)
    {
        $this->fb = $fb;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    public function getLinkedin()
    {
        return $this->linkedin;
    }

    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }
}
?>