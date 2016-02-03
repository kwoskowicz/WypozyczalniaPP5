<<<<<<< Updated upstream
<?php

namespace WypozyczalniaBundle\Entity;

/**
 * CarOrder
 */
class CarOrder
{
    /**
     * @var \DateTime
     */
    private $orderData;

    /**
     * @var integer
     */
    private $orderStatus;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var \WypozyczalniaBundle\Entity\User
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

=======
<?php

namespace WypozyczalniaBundle\Entity;

/**
 * CarOrder
 */
class CarOrder
{
    /**
     * @var \DateTime
     */
    private $orderData;

    /**
     * @var integer
     */
    private $orderStatus;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var \WypozyczalniaBundle\Entity\User
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

>>>>>>> Stashed changes
