<?php
class Order
{
    protected $id;
    protected $customerId;
    protected $createdDate;
    protected $recipient;
    protected $phone;
    protected $wardId;
    protected $shippingAddress;
    protected $statusId;
    protected $shippingCost;
    protected $receivedDate;
    protected $email;

    public function __construct(
        $id,
        $customerId,
        $createdDate,
        $recipient,
        $phone,
        $wardId,
        $shippingAddress,
        $statusId,
        $shippingCost,
        $receivedDate,
        $email
    ) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->createdDate = $createdDate;
        $this->recipient = $recipient;
        $this->phone = $phone;
        $this->wardId = $wardId;
        $this->shippingAddress = $shippingAddress;
        $this->statusId = $statusId;
        $this->shippingCost = $shippingCost;
        $this->receivedDate = $receivedDate;
        $this->email = $email;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getWardId()
    {
        return $this->wardId;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function getStatusId()
    {
        return $this->statusId;
    }

    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    // get email
    public function getEmail()
    {
        return $this->email;
    }

    // Setters
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setWardId($wardId)
    {
        $this->wardId = $wardId;
        return $this;
    }

    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
        return $this;
    }

    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    public function setReceivedDate($receivedDate)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    // set email
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}