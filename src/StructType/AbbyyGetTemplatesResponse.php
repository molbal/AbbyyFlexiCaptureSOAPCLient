<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplatesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetTemplatesResponse extends AbstractStructBase
{
    /**
     * The templates
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyTemplates
     */
    public $templates;
    /**
     * Constructor method for GetTemplatesResponse
     * @uses AbbyyGetTemplatesResponse::setTemplates()
     * @param \AbbyyBridge\StructType\AbbyyTemplates $templates
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyTemplates $templates = null)
    {
        $this
            ->setTemplates($templates);
    }
    /**
     * Get templates value
     * @return \AbbyyBridge\StructType\AbbyyTemplates|null
     */
    public function getTemplates()
    {
        return $this->templates;
    }
    /**
     * Set templates value
     * @param \AbbyyBridge\StructType\AbbyyTemplates $templates
     * @return \AbbyyBridge\StructType\AbbyyGetTemplatesResponse
     */
    public function setTemplates(\AbbyyBridge\StructType\AbbyyTemplates $templates = null)
    {
        $this->templates = $templates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetTemplatesResponse
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
