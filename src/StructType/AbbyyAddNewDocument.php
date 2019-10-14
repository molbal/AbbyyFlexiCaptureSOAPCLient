<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewDocument StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyAddNewDocument extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The document
     * @var \AbbyyBridge\StructType\AbbyyDocument
     */
    public $document;
    /**
     * The file
     * @var \AbbyyBridge\StructType\AbbyyFile
     */
    public $file;
    /**
     * The excludeFromAutomaticAssembling
     * @var bool
     */
    public $excludeFromAutomaticAssembling;
    /**
     * The previousItemId
     * @var int
     */
    public $previousItemId;
    /**
     * Constructor method for AddNewDocument
     * @uses AbbyyAddNewDocument::setSessionId()
     * @uses AbbyyAddNewDocument::setDocument()
     * @uses AbbyyAddNewDocument::setFile()
     * @uses AbbyyAddNewDocument::setExcludeFromAutomaticAssembling()
     * @uses AbbyyAddNewDocument::setPreviousItemId()
     * @param int $sessionId
     * @param \AbbyyBridge\StructType\AbbyyDocument $document
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     * @param bool $excludeFromAutomaticAssembling
     * @param int $previousItemId
     */
    public function __construct($sessionId = null, \AbbyyBridge\StructType\AbbyyDocument $document = null, \AbbyyBridge\StructType\AbbyyFile $file = null, $excludeFromAutomaticAssembling = null, $previousItemId = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setDocument($document)
            ->setFile($file)
            ->setExcludeFromAutomaticAssembling($excludeFromAutomaticAssembling)
            ->setPreviousItemId($previousItemId);
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
     */
    public function setDocument(\AbbyyBridge\StructType\AbbyyDocument $document = null)
    {
        $this->document = $document;
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
     */
    public function setFile(\AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Get excludeFromAutomaticAssembling value
     * @return bool|null
     */
    public function getExcludeFromAutomaticAssembling()
    {
        return $this->excludeFromAutomaticAssembling;
    }
    /**
     * Set excludeFromAutomaticAssembling value
     * @param bool $excludeFromAutomaticAssembling
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
     */
    public function setExcludeFromAutomaticAssembling($excludeFromAutomaticAssembling = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeFromAutomaticAssembling) && !is_bool($excludeFromAutomaticAssembling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeFromAutomaticAssembling, true), gettype($excludeFromAutomaticAssembling)), __LINE__);
        }
        $this->excludeFromAutomaticAssembling = $excludeFromAutomaticAssembling;
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocument
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
