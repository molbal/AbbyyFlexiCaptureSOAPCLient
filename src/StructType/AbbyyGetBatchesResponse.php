<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchesResponse extends AbstractStructBase
{
    /**
     * The batches
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyBatches
     */
    public $batches;
    /**
     * Constructor method for GetBatchesResponse
     * @uses AbbyyGetBatchesResponse::setBatches()
     * @param \AbbyyBridge\StructType\AbbyyBatches $batches
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyBatches $batches = null)
    {
        $this
            ->setBatches($batches);
    }
    /**
     * Get batches value
     * @return \AbbyyBridge\StructType\AbbyyBatches|null
     */
    public function getBatches()
    {
        return $this->batches;
    }
    /**
     * Set batches value
     * @param \AbbyyBridge\StructType\AbbyyBatches $batches
     * @return \AbbyyBridge\StructType\AbbyyGetBatchesResponse
     */
    public function setBatches(\AbbyyBridge\StructType\AbbyyBatches $batches = null)
    {
        $this->batches = $batches;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchesResponse
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
