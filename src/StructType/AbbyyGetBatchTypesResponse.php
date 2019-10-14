<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchTypesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchTypesResponse extends AbstractStructBase
{
    /**
     * The batchTypes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyBatchTypes
     */
    public $batchTypes;
    /**
     * Constructor method for GetBatchTypesResponse
     * @uses AbbyyGetBatchTypesResponse::setBatchTypes()
     * @param \AbbyyBridge\StructType\AbbyyBatchTypes $batchTypes
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyBatchTypes $batchTypes = null)
    {
        $this
            ->setBatchTypes($batchTypes);
    }
    /**
     * Get batchTypes value
     * @return \AbbyyBridge\StructType\AbbyyBatchTypes|null
     */
    public function getBatchTypes()
    {
        return $this->batchTypes;
    }
    /**
     * Set batchTypes value
     * @param \AbbyyBridge\StructType\AbbyyBatchTypes $batchTypes
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypesResponse
     */
    public function setBatchTypes(\AbbyyBridge\StructType\AbbyyBatchTypes $batchTypes = null)
    {
        $this->batchTypes = $batchTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypesResponse
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
