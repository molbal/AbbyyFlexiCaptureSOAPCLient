<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRequestResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyCreateRequestResponse extends AbstractStructBase
{
    /**
     * The requestId
     * @var int
     */
    public $requestId;
    /**
     * Constructor method for CreateRequestResponse
     * @uses AbbyyCreateRequestResponse::setRequestId()
     * @param int $requestId
     */
    public function __construct($requestId = null)
    {
        $this
            ->setRequestId($requestId);
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
     * @return \AbbyyBridge\StructType\AbbyyCreateRequestResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyCreateRequestResponse
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
