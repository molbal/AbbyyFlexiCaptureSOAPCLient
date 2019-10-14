<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllowedBatchTypesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAllowedBatchTypesResponse extends AbstractStructBase
{
    /**
     * The batchTypeIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyBatchTypeIds
     */
    public $batchTypeIds;
    /**
     * Constructor method for GetAllowedBatchTypesResponse
     * @uses AbbyyGetAllowedBatchTypesResponse::setBatchTypeIds()
     * @param \AbbyyBridge\StructType\AbbyyBatchTypeIds $batchTypeIds
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyBatchTypeIds $batchTypeIds = null)
    {
        $this
            ->setBatchTypeIds($batchTypeIds);
    }
    /**
     * Get batchTypeIds value
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIds|null
     */
    public function getBatchTypeIds()
    {
        return $this->batchTypeIds;
    }
    /**
     * Set batchTypeIds value
     * @param \AbbyyBridge\StructType\AbbyyBatchTypeIds $batchTypeIds
     * @return \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypesResponse
     */
    public function setBatchTypeIds(\AbbyyBridge\StructType\AbbyyBatchTypeIds $batchTypeIds = null)
    {
        $this->batchTypeIds = $batchTypeIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypesResponse
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
