<?php

namespace WypozyczalniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="History", indexes={@ORM\Index(name="car_id", columns={"car_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var integer
     *
     * @ORM\Column(name="history_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $historyId;

    /**
     * @var string
     *
     * @ORM\Column(name="history_text", type="string", length=700, nullable=false)
     */
    private $historyText;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="smallint", nullable=true)
     */
    private $rate;

    /**
     * @var \Car
     *
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_id", referencedColumnName="car_id")
     * })
     */
    private $car;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;
	
	   /**
     * Set user
     *
     * @param \WypozyczalniaBundle\Entity\User $user
     *
     * @return History
     */
    public function setUser(\WypozyczalniaBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WypozyczalniaBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set car
     *
     * @param \WypozyczalniaBundle\Entity\Car $car
     *
     * @return History
     */
    public function setCar(\WypozyczalniaBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \WypozyczalniaBundle\Entity\Car
     */
    public function getCar()
    {
        return $this->car;
    }

}

