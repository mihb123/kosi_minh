<?php
class Customer
{
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    protected $birthday;
    protected $verified;
    protected $password;

    public function __construct($id, $name, $email, $phone, $birthday, $verified, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->birthday = $birthday;
        $this->verified = $verified;
        $this->password = $password;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getVerified()
    {
        return $this->verified;
    }

    // Password should not be directly accessible for security reasons
    // Consider using a hashing mechanism for password storage and retrieval
    // public function getPassword() { 
    //     return $this->password; 
    // }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function setVerified($verified)
    {
        $this->verified = $verified;
        return $this;
    }

    // Password should be set using a secure hashing method
    // public function setPassword($password) { 
    //     // Hash the password before storing 
    //     $this->password = password_hash($password, PASSWORD_DEFAULT); 
    //     return $this; 
    // }
}