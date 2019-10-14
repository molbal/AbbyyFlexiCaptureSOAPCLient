<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchTypeResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchTypeResponse extends AbstractStructBase
{
    /**
     * The batchType
     * @var \AbbyyBridge\StructType\AbbyyBatchType
     */
    public $batchType;
    /**
     * Constructor method for GetBatchTypeResponse
     * @uses AbbyyGetBatchTypeResponse::setBatchType()
     * @param \AbbyyBridge\StructType\AbbyyBatchType $batchType
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyBatchType $batchType = null)
    {
        $this
            ->setBatchType($batchType);
    }
    /**
     * Get batchType value
     * @return \AbbyyBridge\StructType\AbbyyBatchType|null
     */
    public function getBatchType()
    {
        return $this->batchType;
    }
    /**
     * Set batchType value
     * @param \AbbyyBridge\StructType\AbbyyBatchType $batchType
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeResponse
     */
    public function setBatchType(\AbbyyBridge\StructType\AbbyyBatchType $batchType = null)
    {
        $this->batchType = $batchType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeResponse
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
