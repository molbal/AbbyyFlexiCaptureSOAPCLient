<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batchTypeIds StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatchTypeIds extends AbstractStructBase
{
    /**
     * The BatchTypeIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyBatchTypeIdentity[]
     */
    public $BatchTypeIdentity;
    /**
     * Constructor method for batchTypeIds
     * @uses AbbyyBatchTypeIds::setBatchTypeIdentity()
     * @param \AbbyyBridge\StructType\AbbyyBatchTypeIdentity[] $batchTypeIdentity
     */
    public function __construct(array $batchTypeIdentity = array())
    {
        $this
            ->setBatchTypeIdentity($batchTypeIdentity);
    }
    /**
     * Get BatchTypeIdentity value
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIdentity[]|null
     */
    public function getBatchTypeIdentity()
    {
        return $this->BatchTypeIdentity;
    }
    /**
     * This method is responsible for validating the values passed to the setBatchTypeIdentity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBatchTypeIdentity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBatchTypeIdentityForArrayConstraintsFromSetBatchTypeIdentity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $batchTypeIdsBatchTypeIdentityItem) {
            // validation for constraint: itemType
            if (!$batchTypeIdsBatchTypeIdentityItem instanceof \AbbyyBridge\StructType\AbbyyBatchTypeIdentity) {
                $invalidValues[] = is_object($batchTypeIdsBatchTypeIdentityItem) ? get_class($batchTypeIdsBatchTypeIdentityItem) : sprintf('%s(%s)', gettype($batchTypeIdsBatchTypeIdentityItem), var_export($batchTypeIdsBatchTypeIdentityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BatchTypeIdentity property can only contain items of type \AbbyyBridge\StructType\AbbyyBatchTypeIdentity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BatchTypeIdentity value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatchTypeIdentity[] $batchTypeIdentity
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIds
     */
    public function setBatchTypeIdentity(array $batchTypeIdentity = array())
    {
        // validation for constraint: array
        if ('' !== ($batchTypeIdentityArrayErrorMessage = self::validateBatchTypeIdentityForArrayConstraintsFromSetBatchTypeIdentity($batchTypeIdentity))) {
            throw new \InvalidArgumentException($batchTypeIdentityArrayErrorMessage, __LINE__);
        }
        $this->BatchTypeIdentity = $batchTypeIdentity;
        return $this;
    }
    /**
     * Add item to BatchTypeIdentity value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatchTypeIdentity $item
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIds
     */
    public function addToBatchTypeIdentity(\AbbyyBridge\StructType\AbbyyBatchTypeIdentity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyBatchTypeIdentity) {
            throw new \InvalidArgumentException(sprintf('The BatchTypeIdentity property can only contain items of type \AbbyyBridge\StructType\AbbyyBatchTypeIdentity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BatchTypeIdentity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIds
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
