<<<<<<< Updated upstream
<?php

namespace WypozyczalniaBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var string
     */
    private $category;

    /**
     * @var integer
     */
    private $categoryId;


    /**
     * Set category
     *
     * @param string $category
     *
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

=======
<?php

namespace WypozyczalniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Category
 *
 * @ORM\Table(name="Category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var string
	 
	 *	
     * @ORM\Column(name="category", type="string", length=20, nullable=false)
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;


    /**
     * Set category
     *
     * @param string $category
     *
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

>>>>>>> Stashed changes
