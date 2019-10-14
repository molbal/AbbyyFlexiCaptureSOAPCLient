<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchTypeTemplatesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchTypeTemplatesResponse extends AbstractStructBase
{
    /**
     * The templateIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyTemplateIds
     */
    public $templateIds;
    /**
     * Constructor method for GetBatchTypeTemplatesResponse
     * @uses AbbyyGetBatchTypeTemplatesResponse::setTemplateIds()
     * @param \AbbyyBridge\StructType\AbbyyTemplateIds $templateIds
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyTemplateIds $templateIds = null)
    {
        $this
            ->setTemplateIds($templateIds);
    }
    /**
     * Get templateIds value
     * @return \AbbyyBridge\StructType\AbbyyTemplateIds|null
     */
    public function getTemplateIds()
    {
        return $this->templateIds;
    }
    /**
     * Set templateIds value
     * @param \AbbyyBridge\StructType\AbbyyTemplateIds $templateIds
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeTemplatesResponse
     */
    public function setTemplateIds(\AbbyyBridge\StructType\AbbyyTemplateIds $templateIds = null)
    {
        $this->templateIds = $templateIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeTemplatesResponse
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
