<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRequestStatusResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetRequestStatusResponse extends AbstractStructBase
{
    /**
     * The status
     * @var int
     */
    public $status;
    /**
     * Constructor method for GetRequestStatusResponse
     * @uses AbbyyGetRequestStatusResponse::setStatus()
     * @param int $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
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
     * @return \AbbyyBridge\StructType\AbbyyGetRequestStatusResponse
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
     * @return \AbbyyBridge\StructType\AbbyyGetRequestStatusResponse
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
