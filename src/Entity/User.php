<?php

namespace Entity;
/**
 * Description of User
 *
 * @author Etudiant
 */
class User 
{
    
    /**
     * Primary key for user
     * @var integer
     */
    private $id;
    
    /**
     * Username of the user
     * @var string 
     */
    private $username;
    
    /**
     * Email of the user
     * @var string 
     */
    private $email;
    
    /**
     * Last name of the user
     * @var string 
     */
    private $lastname;
    
    /**
     * First name of the user
     * @var string 
     */
    private $firstname;
    
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }


}
