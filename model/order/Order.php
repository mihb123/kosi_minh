<?php
class Order
{
    protected $id;
    protected $customerId;
    protected $createdDate;
    protected $recipient;
    protected $phoneNo;
    protected $wardId;
    protected $shippingAddress;
    protected $statusId;
    protected $shippingCost;
    protected $receivedDate;

    public function __construct(
        $id,
        $customerId,
        $createdDate,
        $recipient,
        $phoneNo,
        $wardId,
        $shippingAddress,
        $statusId,
        $shippingCost,
        $receivedDate
    ) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->createdDate = $createdDate;
        $this->recipient = $recipient;
        $this->phoneNo = $phoneNo;
        $this->wardId = $wardId;
        $this->shippingAddress = $shippingAddress;
        $this->statusId = $statusId;
        $this->shippingCost = $shippingCost;
        $this->receivedDate = $receivedDate;
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

    public function getPhoneNo()
    {
        return $this->phoneNo;
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

    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
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
}