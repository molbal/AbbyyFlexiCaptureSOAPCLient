<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskDocumentsResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetTaskDocumentsResponse extends AbstractStructBase
{
    /**
     * The documents
     * @var \AbbyyBridge\StructType\AbbyyTaskDocumentList
     */
    public $documents;
    /**
     * Constructor method for GetTaskDocumentsResponse
     * @uses AbbyyGetTaskDocumentsResponse::setDocuments()
     * @param \AbbyyBridge\StructType\AbbyyTaskDocumentList $documents
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyTaskDocumentList $documents = null)
    {
        $this
            ->setDocuments($documents);
    }
    /**
     * Get documents value
     * @return \AbbyyBridge\StructType\AbbyyTaskDocumentList|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \AbbyyBridge\StructType\AbbyyTaskDocumentList $documents
     * @return \AbbyyBridge\StructType\AbbyyGetTaskDocumentsResponse
     */
    public function setDocuments(\AbbyyBridge\StructType\AbbyyTaskDocumentList $documents = null)
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
     * @return \AbbyyBridge\StructType\AbbyyGetTaskDocumentsResponse
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
