<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUserResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool
     */
    public $result;
    /**
     * The user
     * @var \AbbyyBridge\StructType\AbbyyUser
     */
    public $user;
    /**
     * Constructor method for GetUserResponse
     * @uses AbbyyGetUserResponse::setResult()
     * @uses AbbyyGetUserResponse::setUser()
     * @param bool $result
     * @param \AbbyyBridge\StructType\AbbyyUser $user
     */
    public function __construct($result = null, \AbbyyBridge\StructType\AbbyyUser $user = null)
    {
        $this
            ->setResult($result)
            ->setUser($user);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \AbbyyBridge\StructType\AbbyyGetUserResponse
     */
    public function setResult($result = null)
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Get user value
     * @return \AbbyyBridge\StructType\AbbyyUser|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param \AbbyyBridge\StructType\AbbyyUser $user
     * @return \AbbyyBridge\StructType\AbbyyGetUserResponse
     */
    public function setUser(\AbbyyBridge\StructType\AbbyyUser $user = null)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUserResponse
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
