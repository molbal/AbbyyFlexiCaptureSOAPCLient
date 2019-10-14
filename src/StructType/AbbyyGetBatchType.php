<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchType StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchType extends AbstractStructBase
{
    /**
     * The batchTypeId
     * @var int
     */
    public $batchTypeId;
    /**
     * Constructor method for GetBatchType
     * @uses AbbyyGetBatchType::setBatchTypeId()
     * @param int $batchTypeId
     */
    public function __construct($batchTypeId = null)
    {
        $this
            ->setBatchTypeId($batchTypeId);
    }
    /**
     * Get batchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->batchTypeId;
    }
    /**
     * Set batchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyGetBatchType
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->batchTypeId = $batchTypeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchType
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
