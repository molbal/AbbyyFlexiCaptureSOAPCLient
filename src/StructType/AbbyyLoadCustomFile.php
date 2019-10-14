<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadCustomFile StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyLoadCustomFile extends AbstractStructBase
{
    /**
     * The fileName
     * @var string
     */
    public $fileName;
    /**
     * Constructor method for LoadCustomFile
     * @uses AbbyyLoadCustomFile::setFileName()
     * @param string $fileName
     */
    public function __construct($fileName = null)
    {
        $this
            ->setFileName($fileName);
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
     * @return \AbbyyBridge\StructType\AbbyyLoadCustomFile
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
     * @return \AbbyyBridge\StructType\AbbyyLoadCustomFile
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
