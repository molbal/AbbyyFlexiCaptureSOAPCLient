<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRequest StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyDeleteRequest extends AbstractStructBase
{
    /**
     * The requestId
     * @var int
     */
    public $requestId;
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * Constructor method for DeleteRequest
     * @uses AbbyyDeleteRequest::setRequestId()
     * @uses AbbyyDeleteRequest::setSessionId()
     * @param int $requestId
     * @param int $sessionId
     */
    public function __construct($requestId = null, $sessionId = null)
    {
        $this
            ->setRequestId($requestId)
            ->setSessionId($sessionId);
    }
    /**
     * Get requestId value
     * @return int|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param int $requestId
     * @return \AbbyyBridge\StructType\AbbyyDeleteRequest
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: int
        if (!is_null($requestId) && !(is_int($requestId) || ctype_digit($requestId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        return $this;
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
     * @return \AbbyyBridge\StructType\AbbyyDeleteRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyDeleteRequest
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
