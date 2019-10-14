<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachmentNamesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAttachmentNamesResponse extends AbstractStructBase
{
    /**
     * The fileNames
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyFileNames
     */
    public $fileNames;
    /**
     * Constructor method for GetAttachmentNamesResponse
     * @uses AbbyyGetAttachmentNamesResponse::setFileNames()
     * @param \AbbyyBridge\StructType\AbbyyFileNames $fileNames
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyFileNames $fileNames = null)
    {
        $this
            ->setFileNames($fileNames);
    }
    /**
     * Get fileNames value
     * @return \AbbyyBridge\StructType\AbbyyFileNames|null
     */
    public function getFileNames()
    {
        return $this->fileNames;
    }
    /**
     * Set fileNames value
     * @param \AbbyyBridge\StructType\AbbyyFileNames $fileNames
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNamesResponse
     */
    public function setFileNames(\AbbyyBridge\StructType\AbbyyFileNames $fileNames = null)
    {
        $this->fileNames = $fileNames;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNamesResponse
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
