<?php

namespace WypozyczalniaBundle\Entity;

/**
 * History
 */
class History
{
    /**
     * @var string
     */
    private $historyText;

    /**
     * @var integer
     */
    private $rate;

    /**
     * @var integer
     */
    private $historyId;

    /**
     * @var \WypozyczalniaBundle\Entity\User
     */
    private $user;

    /**
     * @var \WypozyczalniaBundle\Entity\Car
     */
    private $car;


    /**
     * Set historyText
     *
     * @param string $historyText
     *
     * @return History
     */
    public function setHistoryText($historyText)
    {
        $this->historyText = $historyText;

        return $this;
    }

    /**
     * Get historyText
     *
     * @return string
     */
    public function getHistoryText()
    {
        return $this->historyText;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return History
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Get historyId
     *
     * @return integer
     */
    public function getHistoryId()
    {
        return $this->historyId;
    }

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

