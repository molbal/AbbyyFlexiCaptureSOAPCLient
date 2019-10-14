<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatchIdsRangeResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatchIdsRangeResponse extends AbstractStructBase
{
    /**
     * The rangeBegin
     * @var int
     */
    public $rangeBegin;
    /**
     * The rangeEnd
     * @var int
     */
    public $rangeEnd;
    /**
     * Constructor method for GetBatchIdsRangeResponse
     * @uses AbbyyGetBatchIdsRangeResponse::setRangeBegin()
     * @uses AbbyyGetBatchIdsRangeResponse::setRangeEnd()
     * @param int $rangeBegin
     * @param int $rangeEnd
     */
    public function __construct($rangeBegin = null, $rangeEnd = null)
    {
        $this
            ->setRangeBegin($rangeBegin)
            ->setRangeEnd($rangeEnd);
    }
    /**
     * Get rangeBegin value
     * @return int|null
     */
    public function getRangeBegin()
    {
        return $this->rangeBegin;
    }
    /**
     * Set rangeBegin value
     * @param int $rangeBegin
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRangeResponse
     */
    public function setRangeBegin($rangeBegin = null)
    {
        // validation for constraint: int
        if (!is_null($rangeBegin) && !(is_int($rangeBegin) || ctype_digit($rangeBegin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rangeBegin, true), gettype($rangeBegin)), __LINE__);
        }
        $this->rangeBegin = $rangeBegin;
        return $this;
    }
    /**
     * Get rangeEnd value
     * @return int|null
     */
    public function getRangeEnd()
    {
        return $this->rangeEnd;
    }
    /**
     * Set rangeEnd value
     * @param int $rangeEnd
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRangeResponse
     */
    public function setRangeEnd($rangeEnd = null)
    {
        // validation for constraint: int
        if (!is_null($rangeEnd) && !(is_int($rangeEnd) || ctype_digit($rangeEnd))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rangeEnd, true), gettype($rangeEnd)), __LINE__);
        }
        $this->rangeEnd = $rangeEnd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRangeResponse
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
