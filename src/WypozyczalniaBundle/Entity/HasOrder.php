<?php

namespace WypozyczalniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HasOrder
 *
 * @ORM\Table(name="Has_Order", indexes={@ORM\Index(name="car_id", columns={"car_id"}), @ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class HasOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_has_car_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderHasCarId;

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
     * @var \CarOrder
     *
     * @ORM\ManyToOne(targetEntity="CarOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="order_id")
     * })
     */
    private $order;
	
	    /**
     * Get orderHasCarId
     *
     * @return integer
     */
    public function getOrderHasCarId()
    {
        return $this->orderHasCarId;
    }

    /**
     * Set order
     *
     * @param \WypozyczalniaBundle\Entity\CarOrder $order
     *
     * @return HasOrder
     */
    public function setOrder(\WypozyczalniaBundle\Entity\CarOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \WypozyczalniaBundle\Entity\CarOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set car
     *
     * @param \WypozyczalniaBundle\Entity\Car $car
     *
     * @return HasOrder
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

