<?php
class District
{
    protected $id;
    protected $name;
    protected $type;
    protected $provinceId;

    public function __construct($id, $name, $type, $provinceId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->provinceId = $provinceId;
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

    public function getProvinceId()
    {
        return $this->provinceId;
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

    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;
        return $this;
    }

    function getProvince()
    {
        $provinceRepository = new ProvinceRepo;
        $province = $provinceRepository->find($this->provinceId);
        return $province;
    }

    function getWards()
    {
        $wardRepository = new WardRepo;
        return $wardRepository->getByDistrict($this->id);
    }
}