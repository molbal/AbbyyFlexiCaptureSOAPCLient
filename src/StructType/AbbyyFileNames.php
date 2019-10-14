<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fileNames StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyFileNames extends AbstractStructBase
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $string;
    /**
     * Constructor method for fileNames
     * @uses AbbyyFileNames::setString()
     * @param string[] $string
     */
    public function __construct(array $string = array())
    {
        $this
            ->setString($string);
    }
    /**
     * Get string value
     * @return string[]|null
     */
    public function getString()
    {
        return $this->string;
    }
    /**
     * This method is responsible for validating the values passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintsFromSetString(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fileNamesStringItem) {
            // validation for constraint: itemType
            if (!is_string($fileNamesStringItem)) {
                $invalidValues[] = is_object($fileNamesStringItem) ? get_class($fileNamesStringItem) : sprintf('%s(%s)', gettype($fileNamesStringItem), var_export($fileNamesStringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The string property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set string value
     * @throws \InvalidArgumentException
     * @param string[] $string
     * @return \AbbyyBridge\StructType\AbbyyFileNames
     */
    public function setString(array $string = array())
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintsFromSetString($string))) {
            throw new \InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }
        $this->string = $string;
        return $this;
    }
    /**
     * Add item to string value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \AbbyyBridge\StructType\AbbyyFileNames
     */
    public function addToString($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The string property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->string[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyFileNames
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
