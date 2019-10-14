<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBatchResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyDeleteBatchResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool
     */
    public $result;
    /**
     * Constructor method for DeleteBatchResponse
     * @uses AbbyyDeleteBatchResponse::setResult()
     * @param bool $result
     */
    public function __construct($result = null)
    {
        $this
            ->setResult($result);
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
     * @return \AbbyyBridge\StructType\AbbyyDeleteBatchResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyDeleteBatchResponse
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
