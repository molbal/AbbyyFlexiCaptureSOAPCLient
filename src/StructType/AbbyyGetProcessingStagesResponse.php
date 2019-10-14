<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessingStagesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetProcessingStagesResponse extends AbstractStructBase
{
    /**
     * The stages
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyStages
     */
    public $stages;
    /**
     * Constructor method for GetProcessingStagesResponse
     * @uses AbbyyGetProcessingStagesResponse::setStages()
     * @param \AbbyyBridge\StructType\AbbyyStages $stages
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyStages $stages = null)
    {
        $this
            ->setStages($stages);
    }
    /**
     * Get stages value
     * @return \AbbyyBridge\StructType\AbbyyStages|null
     */
    public function getStages()
    {
        return $this->stages;
    }
    /**
     * Set stages value
     * @param \AbbyyBridge\StructType\AbbyyStages $stages
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStagesResponse
     */
    public function setStages(\AbbyyBridge\StructType\AbbyyStages $stages = null)
    {
        $this->stages = $stages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStagesResponse
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
