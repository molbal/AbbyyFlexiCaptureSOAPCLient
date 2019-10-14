<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReplacePageImage StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyReplacePageImage extends AbstractStructBase
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
     * The pageId
     * @var int
     */
    public $pageId;
    /**
     * The file
     * @var \AbbyyBridge\StructType\AbbyyFile
     */
    public $file;
    /**
     * Constructor method for ReplacePageImage
     * @uses AbbyyReplacePageImage::setSessionId()
     * @uses AbbyyReplacePageImage::setBatchId()
     * @uses AbbyyReplacePageImage::setDocumentId()
     * @uses AbbyyReplacePageImage::setPageId()
     * @uses AbbyyReplacePageImage::setFile()
     * @param int $sessionId
     * @param int $batchId
     * @param int $documentId
     * @param int $pageId
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     */
    public function __construct($sessionId = null, $batchId = null, $documentId = null, $pageId = null, \AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setDocumentId($documentId)
            ->setPageId($pageId)
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
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
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
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
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
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
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
     * Get pageId value
     * @return int|null
     */
    public function getPageId()
    {
        return $this->pageId;
    }
    /**
     * Set pageId value
     * @param int $pageId
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
     */
    public function setPageId($pageId = null)
    {
        // validation for constraint: int
        if (!is_null($pageId) && !(is_int($pageId) || ctype_digit($pageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageId, true), gettype($pageId)), __LINE__);
        }
        $this->pageId = $pageId;
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
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
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
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImage
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
