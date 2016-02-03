<?php

namespace WypozyczalniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarOrder
 *
 * @ORM\Table(name="Car_Order", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CarOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_data", type="date", nullable=false)
     */
    private $orderData;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_status", type="smallint", nullable=false)
     */
    private $orderStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=true)
     */
    private $status;

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
     * Set orderData
     *
     * @param \DateTime $orderData
     *
     * @return CarOrder
     */
    public function setOrderData($orderData)
    {
        $this->orderData = $orderData;

        return $this;
    }

    /**
     * Get orderData
     *
     * @return \DateTime
     */
    public function getOrderData()
    {
        return $this->orderData;
    }

    /**
     * Set orderStatus
     *
     * @param integer $orderStatus
     *
     * @return CarOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return integer
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return CarOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set user
     *
     * @param \WypozyczalniaBundle\Entity\User $user
     *
     * @return CarOrder
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

}

