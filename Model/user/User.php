<?php


namespace Model\User;


class User
{
    protected $id;
    protected $name;
    protected $sectors;
    protected $price;
    protected $quantity;
    protected $date;
    protected $description;

    public function __construct($name , $sectors, $price, $quantity , $date , $description)
    {
        $this->name = $name;
        $this->sectors = $sectors;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->date = $date;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getSectors()
    {
        return $this->sectors;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}