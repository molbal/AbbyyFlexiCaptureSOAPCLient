<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchResponse extends AbstractStructBase
{
    /**
     * The batch
     * @var \AbbyyBridge\StructType\AbbyyBatch
     */
    public $batch;
    /**
     * Constructor method for GetBatchResponse
     * @uses AbbyyGetBatchResponse::setBatch()
     * @param \AbbyyBridge\StructType\AbbyyBatch $batch
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyBatch $batch = null)
    {
        $this
            ->setBatch($batch);
    }
    /**
     * Get batch value
     * @return \AbbyyBridge\StructType\AbbyyBatch|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param \AbbyyBridge\StructType\AbbyyBatch $batch
     * @return \AbbyyBridge\StructType\AbbyyGetBatchResponse
     */
    public function setBatch(\AbbyyBridge\StructType\AbbyyBatch $batch = null)
    {
        $this->batch = $batch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchResponse
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
