<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentsResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetDocumentsResponse extends AbstractStructBase
{
    /**
     * The documents
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyDocuments
     */
    public $documents;
    /**
     * Constructor method for GetDocumentsResponse
     * @uses AbbyyGetDocumentsResponse::setDocuments()
     * @param \AbbyyBridge\StructType\AbbyyDocuments $documents
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyDocuments $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get documents value
     * @return \AbbyyBridge\StructType\AbbyyDocuments|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \AbbyyBridge\StructType\AbbyyDocuments $documents
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentsResponse
     */
    public function setDocuments(\AbbyyBridge\StructType\AbbyyDocuments $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentsResponse
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
