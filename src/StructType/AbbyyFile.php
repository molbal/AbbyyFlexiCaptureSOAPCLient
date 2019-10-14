<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for File StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyFile extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Bytes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Bytes;
    /**
     * Constructor method for File
     * @uses AbbyyFile::setName()
     * @uses AbbyyFile::setBytes()
     * @param string $name
     * @param string $bytes
     */
    public function __construct($name = null, $bytes = null)
    {
        $this
            ->setName($name)
            ->setBytes($bytes);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \AbbyyBridge\StructType\AbbyyFile
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Bytes value
     * @return string|null
     */
    public function getBytes()
    {
        return $this->Bytes;
    }
    /**
     * Set Bytes value
     * @param string $bytes
     * @return \AbbyyBridge\StructType\AbbyyFile
     */
    public function setBytes($bytes = null)
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->Bytes = $bytes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyFile
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
