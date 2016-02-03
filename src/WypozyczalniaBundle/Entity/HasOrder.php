<?php

namespace WypozyczalniaBundle\Entity;

/**
 * HasOrder
 */
class HasOrder
{
    /**
     * @var integer
     */
    private $orderHasCarId;

    /**
     * @var \WypozyczalniaBundle\Entity\CarOrder
     */
    private $order;

    /**
     * @var \WypozyczalniaBundle\Entity\Car
     */
    private $car;


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

