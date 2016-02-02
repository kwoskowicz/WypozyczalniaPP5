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
     * @ORM\Column(name="order_has_car_id", type="integer", nullable=false)
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


}

