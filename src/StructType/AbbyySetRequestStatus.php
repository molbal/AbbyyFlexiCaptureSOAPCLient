<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetRequestStatus StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySetRequestStatus extends AbstractStructBase
{
    /**
     * The requestId
     * @var int
     */
    public $requestId;
    /**
     * The status
     * @var int
     */
    public $status;
    /**
     * Constructor method for SetRequestStatus
     * @uses AbbyySetRequestStatus::setRequestId()
     * @uses AbbyySetRequestStatus::setStatus()
     * @param int $requestId
     * @param int $status
     */
    public function __construct($requestId = null, $status = null)
    {
        $this
            ->setRequestId($requestId)
            ->setStatus($status);
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
     * @return \AbbyyBridge\StructType\AbbyySetRequestStatus
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
     * Get status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \AbbyyBridge\StructType\AbbyySetRequestStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyySetRequestStatus
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
