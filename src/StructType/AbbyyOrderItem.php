<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderItem StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyOrderItem extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The Index
     * @var int
     */
    public $Index;
    /**
     * Constructor method for OrderItem
     * @uses AbbyyOrderItem::setId()
     * @uses AbbyyOrderItem::setIndex()
     * @param int $id
     * @param int $index
     */
    public function __construct($id = null, $index = null)
    {
        $this
            ->setId($id)
            ->setIndex($index);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \AbbyyBridge\StructType\AbbyyOrderItem
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param int $index
     * @return \AbbyyBridge\StructType\AbbyyOrderItem
     */
    public function setIndex($index = null)
    {
        // validation for constraint: int
        if (!is_null($index) && !(is_int($index) || ctype_digit($index))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($index, true), gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyOrderItem
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
