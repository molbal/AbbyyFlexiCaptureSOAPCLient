<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomFile StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySaveCustomFile extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The file
     * @var \AbbyyBridge\StructType\AbbyyFile
     */
    public $file;
    /**
     * Constructor method for SaveCustomFile
     * @uses AbbyySaveCustomFile::setSessionId()
     * @uses AbbyySaveCustomFile::setFile()
     * @param int $sessionId
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     */
    public function __construct($sessionId = null, \AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this
            ->setSessionId($sessionId)
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
     * @return \AbbyyBridge\StructType\AbbyySaveCustomFile
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
     * @return \AbbyyBridge\StructType\AbbyySaveCustomFile
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
     * @return \AbbyyBridge\StructType\AbbyySaveCustomFile
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
