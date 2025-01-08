<?php
class Ward
{
    protected $id;
    protected $name;
    protected $type;
    protected $districtId;

    public function __construct($id, $name, $type, $districtId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->districtId = $districtId;
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

    public function getType()
    {
        return $this->type;
    }

    public function getDistrictId()
    {
        return $this->districtId;
    }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;
        return $this;
    }
}