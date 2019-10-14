<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchIdsRange StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchIdsRange extends AbstractStructBase
{
    /**
     * The batchId
     * @var int
     */
    public $batchId;
    /**
     * The idsCount
     * @var int
     */
    public $idsCount;
    /**
     * Constructor method for GetBatchIdsRange
     * @uses AbbyyGetBatchIdsRange::setBatchId()
     * @uses AbbyyGetBatchIdsRange::setIdsCount()
     * @param int $batchId
     * @param int $idsCount
     */
    public function __construct($batchId = null, $idsCount = null)
    {
        $this
            ->setBatchId($batchId)
            ->setIdsCount($idsCount);
    }
    /**
     * Get batchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRange
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        return $this;
    }
    /**
     * Get idsCount value
     * @return int|null
     */
    public function getIdsCount()
    {
        return $this->idsCount;
    }
    /**
     * Set idsCount value
     * @param int $idsCount
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRange
     */
    public function setIdsCount($idsCount = null)
    {
        // validation for constraint: int
        if (!is_null($idsCount) && !(is_int($idsCount) || ctype_digit($idsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idsCount, true), gettype($idsCount)), __LINE__);
        }
        $this->idsCount = $idsCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRange
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
