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

