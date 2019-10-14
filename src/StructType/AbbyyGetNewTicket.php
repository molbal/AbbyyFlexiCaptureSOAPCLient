<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNewTicket StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetNewTicket extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The stationType
     * @var int
     */
    public $stationType;
    /**
     * Constructor method for GetNewTicket
     * @uses AbbyyGetNewTicket::setSessionId()
     * @uses AbbyyGetNewTicket::setStationType()
     * @param int $sessionId
     * @param int $stationType
     */
    public function __construct($sessionId = null, $stationType = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setStationType($stationType);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyyGetNewTicket
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
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
     * @return \AbbyyBridge\StructType\AbbyyGetNewTicket
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
     * @return \AbbyyBridge\StructType\AbbyyGetNewTicket
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
