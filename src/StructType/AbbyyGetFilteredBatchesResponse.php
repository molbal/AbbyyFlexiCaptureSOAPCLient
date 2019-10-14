<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredBatchesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetFilteredBatchesResponse extends AbstractStructBase
{
    /**
     * The totalBatchesCount
     * @var int
     */
    public $totalBatchesCount;
    /**
     * The batches
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyBatches
     */
    public $batches;
    /**
     * Constructor method for GetFilteredBatchesResponse
     * @uses AbbyyGetFilteredBatchesResponse::setTotalBatchesCount()
     * @uses AbbyyGetFilteredBatchesResponse::setBatches()
     * @param int $totalBatchesCount
     * @param \AbbyyBridge\StructType\AbbyyBatches $batches
     */
    public function __construct($totalBatchesCount = null, \AbbyyBridge\StructType\AbbyyBatches $batches = null)
    {
        $this
            ->setTotalBatchesCount($totalBatchesCount)
            ->setBatches($batches);
    }
    /**
     * Get totalBatchesCount value
     * @return int|null
     */
    public function getTotalBatchesCount()
    {
        return $this->totalBatchesCount;
    }
    /**
     * Set totalBatchesCount value
     * @param int $totalBatchesCount
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatchesResponse
     */
    public function setTotalBatchesCount($totalBatchesCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalBatchesCount) && !(is_int($totalBatchesCount) || ctype_digit($totalBatchesCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBatchesCount, true), gettype($totalBatchesCount)), __LINE__);
        }
        $this->totalBatchesCount = $totalBatchesCount;
        return $this;
    }
    /**
     * Get batches value
     * @return \AbbyyBridge\StructType\AbbyyBatches|null
     */
    public function getBatches()
    {
        return $this->batches;
    }
    /**
     * Set batches value
     * @param \AbbyyBridge\StructType\AbbyyBatches $batches
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatchesResponse
     */
    public function setBatches(\AbbyyBridge\StructType\AbbyyBatches $batches = null)
    {
        $this->batches = $batches;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatchesResponse
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
