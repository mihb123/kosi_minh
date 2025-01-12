<?php
class Material
{
    protected $id;
    protected $name;
    protected $description;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    function count()
    {
        $skuRepo = new SkuRepo;
        $id = $this->getId();
        $array_conds = [
            'material_id' => [
                'type' => "=",
                'val' => "$id"
            ]
        ];
        $materials = $skuRepo->getBy($array_conds);
        $uniqueMaterials = $skuRepo->removeDup($materials);

        return count($uniqueMaterials);
    }
}