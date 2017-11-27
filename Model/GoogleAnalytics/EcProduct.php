<?php

namespace JsSdkBundle\Model\GoogleAnalytics;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class EcProduct
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string|null */
    private $brand;

    /** @var string|null */
    private $category;

    /** @var string|null */
    private $variant;

    /** @var float|null */
    private $price;

    /** @var integer|null */
    private $quantity;

    /** @var string|null*/
    private $coupon;

    /** @var integer|null */
    private $position;

    /**
     * EcProduct constructor.
     * @param string $id
     * @param string $name
     * @param null|string $brand
     * @param null|string $category
     * @param null|string $variant
     * @param float|null $price
     * @param int|null $quantity
     * @param null|string $coupon
     * @param int|null $position
     */
    public function __construct(
        string $id = '',
        string $name = '',
        string $brand = null,
        string $category = null,
        string $variant = null,
        float $price = null,
        int $quantity = null,
        string $coupon = null,
        int $position = null)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setBrand($brand);
        $this->setCategory($category);
        $this->setVariant($variant);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->setCoupon($coupon);
        $this->setPosition($position);
    }

    /**
     * @param ExecutionContextInterface $context
     * @Assert\Callback()
     */
    public function validate(ExecutionContextInterface $context)
    {
        if ($this->getId() === '' && $this->getName() === '')
        {
            $context->buildViolation('Either ID or Name is required')
                ->atPath('id')
                ->addViolation();
        }
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param null|string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return null|string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param null|string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @param null|string $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return null|string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param null|string $coupon
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
