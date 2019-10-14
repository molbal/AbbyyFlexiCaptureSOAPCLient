<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadCustomFileResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyLoadCustomFileResponse extends AbstractStructBase
{
    /**
     * The file
     * @var \AbbyyBridge\StructType\AbbyyFile
     */
    public $file;
    /**
     * Constructor method for LoadCustomFileResponse
     * @uses AbbyyLoadCustomFileResponse::setFile()
     * @param \AbbyyBridge\StructType\AbbyyFile $file
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyFile $file = null)
    {
        $this
            ->setFile($file);
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
     * @return \AbbyyBridge\StructType\AbbyyLoadCustomFileResponse
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
     * @return \AbbyyBridge\StructType\AbbyyLoadCustomFileResponse
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
