<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewDocumentResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyAddNewDocumentResponse extends AbstractStructBase
{
    /**
     * The documentId
     * @var int
     */
    public $documentId;
    /**
     * Constructor method for AddNewDocumentResponse
     * @uses AbbyyAddNewDocumentResponse::setDocumentId()
     * @param int $documentId
     */
    public function __construct($documentId = null)
    {
        $this
            ->setDocumentId($documentId);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocumentResponse
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocumentResponse
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
