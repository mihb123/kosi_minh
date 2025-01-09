<?php
class Category
{
    protected $id;
    protected $name;

    // Constructor
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter methods
    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    // Setter methods
    function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
