<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadDocumentResult StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyLoadDocumentResult extends AbstractStructBase
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
     * The fileName
     * @var string
     */
    public $fileName;
    /**
     * Constructor method for LoadDocumentResult
     * @uses AbbyyLoadDocumentResult::setSessionId()
     * @uses AbbyyLoadDocumentResult::setBatchId()
     * @uses AbbyyLoadDocumentResult::setDocumentId()
     * @uses AbbyyLoadDocumentResult::setFileName()
     * @param int $sessionId
     * @param int $batchId
     * @param int $documentId
     * @param string $fileName
     */
    public function __construct($sessionId = null, $batchId = null, $documentId = null, $fileName = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setDocumentId($documentId)
            ->setFileName($fileName);
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
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResult
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
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResult
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
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResult
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
     * Get fileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResult
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResult
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
