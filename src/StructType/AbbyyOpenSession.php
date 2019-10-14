<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenSession StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyOpenSession extends AbstractStructBase
{
    /**
     * The roleType
     * @var int
     */
    public $roleType;
    /**
     * The stationType
     * @var int
     */
    public $stationType;
    /**
     * Constructor method for OpenSession
     * @uses AbbyyOpenSession::setRoleType()
     * @uses AbbyyOpenSession::setStationType()
     * @param int $roleType
     * @param int $stationType
     */
    public function __construct($roleType = null, $stationType = null)
    {
        $this
            ->setRoleType($roleType)
            ->setStationType($stationType);
    }
    /**
     * Get roleType value
     * @return int|null
     */
    public function getRoleType()
    {
        return $this->roleType;
    }
    /**
     * Set roleType value
     * @param int $roleType
     * @return \AbbyyBridge\StructType\AbbyyOpenSession
     */
    public function setRoleType($roleType = null)
    {
        // validation for constraint: int
        if (!is_null($roleType) && !(is_int($roleType) || ctype_digit($roleType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleType, true), gettype($roleType)), __LINE__);
        }
        $this->roleType = $roleType;
        return $this;
    }
    /**
     * Get stationType value
     * @return int|null
     */
    public function getStationType()
    {
        return $this->stationType;
    }
    /**
     * Set stationType value
     * @param int $stationType
     * @return \AbbyyBridge\StructType\AbbyyOpenSession
     */
    public function setStationType($stationType = null)
    {
        // validation for constraint: int
        if (!is_null($stationType) && !(is_int($stationType) || ctype_digit($stationType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stationType, true), gettype($stationType)), __LINE__);
        }
        $this->stationType = $stationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyOpenSession
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
