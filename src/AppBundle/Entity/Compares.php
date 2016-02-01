<?php
// src/AppBundle/Entity/Compares.php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compares")
 */
class Compares
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
	/**
     * @ORM\Column(type="integer")
     */
    public $action1;
	/**
     * @ORM\Column(type="integer")
     */
    public $action2;
	/**
     * @ORM\Column(type="string", length=25)
     */
    public $result;

    public function getAction1()
    {
        return $this->action1;
    }

    public function setAction1($action1)
    {
        $this->action1 = $action1;
    }

    public function getAction2()
    {
        return $this->action2;
    }

    public function setAction2($action2)
    {
        $this->action2 = $action2;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setId($result)
    {
        $this->result = $result;
    }
}