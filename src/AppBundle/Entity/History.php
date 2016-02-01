<?php
// src/AppBundle/Entity/History.php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="history")
 */
class History
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
	/**
     * @ORM\Column(type="string", length=25)
     */
    public $player1name;
	/**
     * @ORM\Column(type="integer")
     */
    public $player1action;
	/**
     * @ORM\Column(type="string", length=25)
     */
    public $player2name;
	/**
     * @ORM\Column(type="integer")
     */
    public $player2action;
	/**
     * @ORM\Column(type="integer")
     */
    public $winner;
	/**
     * @ORM\Column(type="datetime")
     */
    public $created_at;

    public function getPlayer1name()
    {
        return $this->player1name;
    }

    public function setPlayer1name($player1name)
    {
        $this->player1name = $player1name;
    }

    public function getPlayer1action()
    {
        return $this->player1action;
    }

    public function setPlayer1action($player1action)
    {
        $this->player1action = $player1action;
    }

    public function getPlayer2name()
    {
        return $this->player2name;
    }

    public function setPlayer2name($player2name)
    {
        $this->player2name = $player2name;
    }

    public function getPlayer2action()
    {
        return $this->player2action;
    }

    public function setPlayer2action($player2action)
    {
        $this->player2action = $player2action;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function setWinner($winner)
    {
        $this->winner = $winner;
    }

    public function getCreated_at()
    {
        $this->created_at = $created_at;
    }

    public function setCreated_at(\DateTime $created_at = null)
    {
        $this->created_at = $created_at;
    }
}