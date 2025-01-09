<?php
class Color
{
    protected $id;
    protected $name;
    protected $code;

    public function __construct($id, $name, $code)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    function countColor()
    {
        $skuRepo = new SkuRepo;
        $name = $this->getName();
        $array_conds = [
            'color_name' => [
                'type' => "=",
                'val' => "$name"
            ]
        ];
        $colors = $skuRepo->getBy($array_conds);
        return count($colors);
    }

    function getProductByColor()
    {
        $skuRepo = new SkuRepo;
        $name = $this->getName();
        $array_conds = [
            'color_name' => [
                'type' => "=",
                'val' => "$name"
            ]
        ];
        $products = $skuRepo->getBy($array_conds);
        return $products;
    }
}
