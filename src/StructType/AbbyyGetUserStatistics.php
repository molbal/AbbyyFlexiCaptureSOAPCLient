<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserStatistics StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUserStatistics extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The fromDate
     * @var int
     */
    public $fromDate;
    /**
     * The toDate
     * @var int
     */
    public $toDate;
    /**
     * Constructor method for GetUserStatistics
     * @uses AbbyyGetUserStatistics::setUserId()
     * @uses AbbyyGetUserStatistics::setFromDate()
     * @uses AbbyyGetUserStatistics::setToDate()
     * @param int $userId
     * @param int $fromDate
     * @param int $toDate
     */
    public function __construct($userId = null, $fromDate = null, $toDate = null)
    {
        $this
            ->setUserId($userId)
            ->setFromDate($fromDate)
            ->setToDate($toDate);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatistics
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Get fromDate value
     * @return int|null
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param int $fromDate
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatistics
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: int
        if (!is_null($fromDate) && !(is_int($fromDate) || ctype_digit($fromDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        return $this;
    }
    /**
     * Get toDate value
     * @return int|null
     */
    public function getToDate()
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param int $toDate
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatistics
     */
    public function setToDate($toDate = null)
    {
        // validation for constraint: int
        if (!is_null($toDate) && !(is_int($toDate) || ctype_digit($toDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatistics
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
