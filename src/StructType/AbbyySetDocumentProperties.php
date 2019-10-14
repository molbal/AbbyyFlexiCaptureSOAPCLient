<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDocumentProperties StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySetDocumentProperties extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The batchId
     * @var int
     */
    public $batchId;
    /**
     * The documentId
     * @var int
     */
    public $documentId;
    /**
     * The properties
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyProperties
     */
    public $properties;
    /**
     * Constructor method for SetDocumentProperties
     * @uses AbbyySetDocumentProperties::setSessionId()
     * @uses AbbyySetDocumentProperties::setBatchId()
     * @uses AbbyySetDocumentProperties::setDocumentId()
     * @uses AbbyySetDocumentProperties::setProperties()
     * @param int $sessionId
     * @param int $batchId
     * @param int $documentId
     * @param \AbbyyBridge\StructType\AbbyyProperties $properties
     */
    public function __construct($sessionId = null, $batchId = null, $documentId = null, \AbbyyBridge\StructType\AbbyyProperties $properties = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setDocumentId($documentId)
            ->setProperties($properties);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyySetDocumentProperties
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Get batchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyySetDocumentProperties
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        return $this;
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
     * @return \AbbyyBridge\StructType\AbbyySetDocumentProperties
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
     * Get properties value
     * @return \AbbyyBridge\StructType\AbbyyProperties|null
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * Set properties value
     * @param \AbbyyBridge\StructType\AbbyyProperties $properties
     * @return \AbbyyBridge\StructType\AbbyySetDocumentProperties
     */
    public function setProperties(\AbbyyBridge\StructType\AbbyyProperties $properties = null)
    {
        $this->properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyySetDocumentProperties
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
