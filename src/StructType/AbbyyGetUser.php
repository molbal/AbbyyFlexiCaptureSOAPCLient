<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUser StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUser extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * Constructor method for GetUser
     * @uses AbbyyGetUser::setUserId()
     * @param int $userId
     */
    public function __construct($userId = null)
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \AbbyyBridge\StructType\AbbyyGetUser
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUser
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
