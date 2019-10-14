<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stageTypes StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyStageTypes extends AbstractStructBase
{
    /**
     * The int
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $int;
    /**
     * Constructor method for stageTypes
     * @uses AbbyyStageTypes::setInt()
     * @param int[] $int
     */
    public function __construct(array $int = array())
    {
        $this
            ->setInt($int);
    }
    /**
     * Get int value
     * @return int[]|null
     */
    public function getInt()
    {
        return $this->int;
    }
    /**
     * This method is responsible for validating the values passed to the setInt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntForArrayConstraintsFromSetInt(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $stageTypesIntItem) {
            // validation for constraint: itemType
            if (!(is_int($stageTypesIntItem) || ctype_digit($stageTypesIntItem))) {
                $invalidValues[] = is_object($stageTypesIntItem) ? get_class($stageTypesIntItem) : sprintf('%s(%s)', gettype($stageTypesIntItem), var_export($stageTypesIntItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The int property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set int value
     * @throws \InvalidArgumentException
     * @param int[] $int
     * @return \AbbyyBridge\StructType\AbbyyStageTypes
     */
    public function setInt(array $int = array())
    {
        // validation for constraint: array
        if ('' !== ($intArrayErrorMessage = self::validateIntForArrayConstraintsFromSetInt($int))) {
            throw new \InvalidArgumentException($intArrayErrorMessage, __LINE__);
        }
        $this->int = $int;
        return $this;
    }
    /**
     * Add item to int value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \AbbyyBridge\StructType\AbbyyStageTypes
     */
    public function addToInt($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The int property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->int[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyStageTypes
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
