<?php
namespace WypozyczalniaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * History
 * @ORM\Table(name="History", indexes={@ORM\Index(name="car_id", columns={"car_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var string
     *
     * @ORM\Column(name="history_text", type="string", length=400, nullable=false)
     */
    private $historyText;
    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate;
    /**
     * @var integer
     *
     * @ORM\Column(name="history_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $historyId;
    /**
     * @var \WypozyczalniaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="WypozyczalniaBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;
    /**
     * @var \WypozyczalniaBundle\Entity\car
     *
     * @ORM\ManyToOne(targetEntity="WypozyczalniaBundle\Entity\car")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_id", referencedColumnName="car_id")
     * })
     */
    private $car;
    /**
     * Set historyText
     *
     * @param string $historyText
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
     * @param \WypozyczalniaBundle\Entity\car $car
     * @return History
     */
    public function setCar(\WypozyczalniaBundle\Entity\car $car = null)
    {
        $this->car = $car;
        return $this;
    }
    /**
     * Get car
     *
     * @return \WypozyczalniaBundle\Entity\car 
     */
    public function getCar()
    {
        return $this->car;
    }
}