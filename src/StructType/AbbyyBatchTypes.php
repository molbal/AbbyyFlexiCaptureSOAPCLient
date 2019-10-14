<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batchTypes StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatchTypes extends AbstractStructBase
{
    /**
     * The BatchType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyBatchType[]
     */
    public $BatchType;
    /**
     * Constructor method for batchTypes
     * @uses AbbyyBatchTypes::setBatchType()
     * @param \AbbyyBridge\StructType\AbbyyBatchType[] $batchType
     */
    public function __construct(array $batchType = array())
    {
        $this
            ->setBatchType($batchType);
    }
    /**
     * Get BatchType value
     * @return \AbbyyBridge\StructType\AbbyyBatchType[]|null
     */
    public function getBatchType()
    {
        return $this->BatchType;
    }
    /**
     * This method is responsible for validating the values passed to the setBatchType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBatchType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBatchTypeForArrayConstraintsFromSetBatchType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $batchTypesBatchTypeItem) {
            // validation for constraint: itemType
            if (!$batchTypesBatchTypeItem instanceof \AbbyyBridge\StructType\AbbyyBatchType) {
                $invalidValues[] = is_object($batchTypesBatchTypeItem) ? get_class($batchTypesBatchTypeItem) : sprintf('%s(%s)', gettype($batchTypesBatchTypeItem), var_export($batchTypesBatchTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BatchType property can only contain items of type \AbbyyBridge\StructType\AbbyyBatchType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BatchType value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatchType[] $batchType
     * @return \AbbyyBridge\StructType\AbbyyBatchTypes
     */
    public function setBatchType(array $batchType = array())
    {
        // validation for constraint: array
        if ('' !== ($batchTypeArrayErrorMessage = self::validateBatchTypeForArrayConstraintsFromSetBatchType($batchType))) {
            throw new \InvalidArgumentException($batchTypeArrayErrorMessage, __LINE__);
        }
        $this->BatchType = $batchType;
        return $this;
    }
    /**
     * Add item to BatchType value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatchType $item
     * @return \AbbyyBridge\StructType\AbbyyBatchTypes
     */
    public function addToBatchType(\AbbyyBridge\StructType\AbbyyBatchType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyBatchType) {
            throw new \InvalidArgumentException(sprintf('The BatchType property can only contain items of type \AbbyyBridge\StructType\AbbyyBatchType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BatchType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatchTypes
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
