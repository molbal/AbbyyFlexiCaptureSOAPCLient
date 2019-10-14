<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetDocumentResponse extends AbstractStructBase
{
    /**
     * The document
     * @var \AbbyyBridge\StructType\AbbyyDocument
     */
    public $document;
    /**
     * Constructor method for GetDocumentResponse
     * @uses AbbyyGetDocumentResponse::setDocument()
     * @param \AbbyyBridge\StructType\AbbyyDocument $document
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyDocument $document = null)
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get document value
     * @return \AbbyyBridge\StructType\AbbyyDocument|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param \AbbyyBridge\StructType\AbbyyDocument $document
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentResponse
     */
    public function setDocument(\AbbyyBridge\StructType\AbbyyDocument $document = null)
    {
        $this->document = $document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentResponse
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
