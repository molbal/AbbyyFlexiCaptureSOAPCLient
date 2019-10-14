<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batches StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatches extends AbstractStructBase
{
    /**
     * The Batch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyBatch[]
     */
    public $Batch;
    /**
     * Constructor method for batches
     * @uses AbbyyBatches::setBatch()
     * @param \AbbyyBridge\StructType\AbbyyBatch[] $batch
     */
    public function __construct(array $batch = array())
    {
        $this
            ->setBatch($batch);
    }
    /**
     * Get Batch value
     * @return \AbbyyBridge\StructType\AbbyyBatch[]|null
     */
    public function getBatch()
    {
        return $this->Batch;
    }
    /**
     * This method is responsible for validating the values passed to the setBatch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBatch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBatchForArrayConstraintsFromSetBatch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $batchesBatchItem) {
            // validation for constraint: itemType
            if (!$batchesBatchItem instanceof \AbbyyBridge\StructType\AbbyyBatch) {
                $invalidValues[] = is_object($batchesBatchItem) ? get_class($batchesBatchItem) : sprintf('%s(%s)', gettype($batchesBatchItem), var_export($batchesBatchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Batch property can only contain items of type \AbbyyBridge\StructType\AbbyyBatch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Batch value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatch[] $batch
     * @return \AbbyyBridge\StructType\AbbyyBatches
     */
    public function setBatch(array $batch = array())
    {
        // validation for constraint: array
        if ('' !== ($batchArrayErrorMessage = self::validateBatchForArrayConstraintsFromSetBatch($batch))) {
            throw new \InvalidArgumentException($batchArrayErrorMessage, __LINE__);
        }
        $this->Batch = $batch;
        return $this;
    }
    /**
     * Add item to Batch value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyBatch $item
     * @return \AbbyyBridge\StructType\AbbyyBatches
     */
    public function addToBatch(\AbbyyBridge\StructType\AbbyyBatch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyBatch) {
            throw new \InvalidArgumentException(sprintf('The Batch property can only contain items of type \AbbyyBridge\StructType\AbbyyBatch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Batch[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatches
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
