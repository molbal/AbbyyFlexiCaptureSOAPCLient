<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WriteToLog StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyWriteToLog extends AbstractStructBase
{
    /**
     * The clientTime
     * @var int
     */
    public $clientTime;
    /**
     * The records
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyRecords
     */
    public $records;
    /**
     * Constructor method for WriteToLog
     * @uses AbbyyWriteToLog::setClientTime()
     * @uses AbbyyWriteToLog::setRecords()
     * @param int $clientTime
     * @param \AbbyyBridge\StructType\AbbyyRecords $records
     */
    public function __construct($clientTime = null, \AbbyyBridge\StructType\AbbyyRecords $records = null)
    {
        $this
            ->setClientTime($clientTime)
            ->setRecords($records);
    }
    /**
     * Get clientTime value
     * @return int|null
     */
    public function getClientTime()
    {
        return $this->clientTime;
    }
    /**
     * Set clientTime value
     * @param int $clientTime
     * @return \AbbyyBridge\StructType\AbbyyWriteToLog
     */
    public function setClientTime($clientTime = null)
    {
        // validation for constraint: int
        if (!is_null($clientTime) && !(is_int($clientTime) || ctype_digit($clientTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($clientTime, true), gettype($clientTime)), __LINE__);
        }
        $this->clientTime = $clientTime;
        return $this;
    }
    /**
     * Get records value
     * @return \AbbyyBridge\StructType\AbbyyRecords|null
     */
    public function getRecords()
    {
        return $this->records;
    }
    /**
     * Set records value
     * @param \AbbyyBridge\StructType\AbbyyRecords $records
     * @return \AbbyyBridge\StructType\AbbyyWriteToLog
     */
    public function setRecords(\AbbyyBridge\StructType\AbbyyRecords $records = null)
    {
        $this->records = $records;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyWriteToLog
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
