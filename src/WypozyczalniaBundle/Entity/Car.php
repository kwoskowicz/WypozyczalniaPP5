<?php
namespace WypozyczalniaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Car
 *
 * @ORM\Table(name="Car", indexes={@ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Car
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="integer", length=6, nullable=false)
     */
    private $price;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=256, nullable=false)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=150, nullable=true)
     */
    private $imgUrl;
    /**
     * @var string
     *
     * @ORM\Column(name="seats", type="string", length=10, nullable=true)
     */
    private $seats;
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="int", nullable=true)
     */
    private $status;
    /**
     * @var integer
     *
     * @ORM\Column(name="car_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $car_id;
    /**
     * @var \WypozyczalniaBundle\Entity\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="WypozyczalniaBundle\Entity\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;
   
    /**
     * Set name
     *
     * @param string $name
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set price
     *
     * @param string $price
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set description
     *
     * @param string $description
     * @return Car
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     * @return Car
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;
        return $this;
    }
    /**
     * Get imgUrl
     *
     * @return string 
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }
	/**
     * Set seats
     *
     * @param string $seats
     * @return Car
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get seats
     *
     * @return string 
     */
    public function getSeats()
    {
        return $this->seats;
    }
    /**
     * Set status
     *
     * @param integer $status
     * @return Car
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
     * Get car_id
     *
     * @return integer 
     */
    public function getCar_id()
    {
        return $this->car_id;
    }
    /**
     * Set category
     *
     * @param \WypozyczalniaBundle\Entity\Entity\Category $category
     * @return Car
     */
    public function setCategory(\WypozyczalniaBundle\Entity\Entity\Category $category = null)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * Get category
     *
     * @return \WypozyczalniaBundle\Entity\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}