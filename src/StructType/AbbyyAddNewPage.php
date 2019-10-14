<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewPage StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyAddNewPage extends AbstractStructBase
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
     * The previousItemId
     * @var int
     */
    public $previousItemId;
    /**
     * The page
     * @var \AbbyyBridge\StructType\AbbyyPage
     */
    public $page;
    /**
     * The file
     * @var \AbbyyBridge\StructType\AbbyyFile
     */
    public $file;
    /**
     * Constructor method for AddNewPage
     * @uses AbbyyAddNewPage::setSessionId()
     * @uses AbbyyAddNewPage::setBatchId()
     * @uses AbbyyAddNewPage::setDocumentId()
     * @uses AbbyyAddNewPage::setPreviousItemId()
     * @uses AbbyyAddNewPage::setPage()
     * @uses AbbyyAddNewPage::setFile()
     * @param int $sessionId
     * @param int $batchId
     * @param int $documentId
     * @param int $previousItemId
     * @param \AbbyyBridge\StructType\AbbyyPage $page
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     */
    public function __construct($sessionId = null, $batchId = null, $documentId = null, $previousItemId = null, \AbbyyBridge\StructType\AbbyyPage $page = null, \AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setDocumentId($documentId)
            ->setPreviousItemId($previousItemId)
            ->setPage($page)
            ->setFile($file);
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
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
     * Get previousItemId value
     * @return int|null
     */
    public function getPreviousItemId()
    {
        return $this->previousItemId;
    }
    /**
     * Set previousItemId value
     * @param int $previousItemId
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
     */
    public function setPreviousItemId($previousItemId = null)
    {
        // validation for constraint: int
        if (!is_null($previousItemId) && !(is_int($previousItemId) || ctype_digit($previousItemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($previousItemId, true), gettype($previousItemId)), __LINE__);
        }
        $this->previousItemId = $previousItemId;
        return $this;
    }
    /**
     * Get page value
     * @return \AbbyyBridge\StructType\AbbyyPage|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param \AbbyyBridge\StructType\AbbyyPage $page
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
     */
    public function setPage(\AbbyyBridge\StructType\AbbyyPage $page = null)
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Get file value
     * @return \AbbyyBridge\StructType\AbbyyFile|null
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
     */
    public function setFile(\AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyAddNewPage
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
