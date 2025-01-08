<?php
class Discount
{
    protected $id;
    protected $name;
    protected $percent;
    protected $startDate;
    protected $endDate;

    public function __construct($id, $name, $percent, $startDate, $endDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->percent = $percent;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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

    public function getPercent()
    {
        return $this->percent;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}
