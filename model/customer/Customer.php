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
    protected $shipping_name;
    protected $shipping_phone;
    protected $shipping_address;
    protected $shipping_ward_id;

    public function __construct($id, $name, $email, $phone, $birthday, $verified, $password, $shipping_name, $shipping_phone, $shipping_address, $shipping_ward_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->birthday = $birthday;
        $this->verified = $verified;
        $this->password = $password;
        $this->shipping_name = $shipping_name;
        $this->shipping_phone = $shipping_phone;
        $this->shipping_address = $shipping_address;
        $this->shipping_ward_id = $shipping_ward_id;
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

    public function getPassword()
    {
        return $this->password;
    }

    // Getters for new properties
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    public function getShippingPhone()
    {
        return $this->shipping_phone;
    }

    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    public function getShippingWardId()
    {
        return $this->shipping_ward_id;
    }

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

    // Setters for new properties
    public function setShippingName($shipping_name)
    {
        $this->shipping_name = $shipping_name;
        return $this;
    }

    public function setShippingPhone($shipping_phone)
    {
        $this->shipping_phone = $shipping_phone;
        return $this;
    }

    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
        return $this;
    }

    public function setShippingWardId($shipping_ward_id)
    {
        $this->shipping_ward_id = $shipping_ward_id;
        return $this;
    }

    function getWard()
    {
        if (!$this->shipping_ward_id) return null;
        $ward_id = $this->getShippingWardId();
        $wardRepo = new WardRepo;
        $ward = $wardRepo->find($ward_id);
        return $ward;
    }
}