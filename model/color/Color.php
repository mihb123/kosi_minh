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
        $id = $this->getId();
        $array_conds = [
            'color_id' => [
                'type' => "=",
                'val' => "$id"
            ]
        ];
        $colors = $skuRepo->getBy($array_conds);
        $uniqueColor = $skuRepo->removeDup($colors);
        return count($uniqueColor);
    }

    function getProductByColor()
    {
        $skuRepo = new SkuRepo;
        $id = $this->getId();
        $array_conds = [
            'color_name' => [
                'type' => "=",
                'val' => "$id"
            ]
        ];
        $products = $skuRepo->getBy($array_conds);
        $uniqueProducts = $skuRepo->removeDup($products);
        return $uniqueProducts;
    }
}