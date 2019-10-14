<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for records StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyRecords extends AbstractStructBase
{
    /**
     * The LogRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyLogRecord[]
     */
    public $LogRecord;
    /**
     * Constructor method for records
     * @uses AbbyyRecords::setLogRecord()
     * @param \AbbyyBridge\StructType\AbbyyLogRecord[] $logRecord
     */
    public function __construct(array $logRecord = array())
    {
        $this
            ->setLogRecord($logRecord);
    }
    /**
     * Get LogRecord value
     * @return \AbbyyBridge\StructType\AbbyyLogRecord[]|null
     */
    public function getLogRecord()
    {
        return $this->LogRecord;
    }
    /**
     * This method is responsible for validating the values passed to the setLogRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLogRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLogRecordForArrayConstraintsFromSetLogRecord(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recordsLogRecordItem) {
            // validation for constraint: itemType
            if (!$recordsLogRecordItem instanceof \AbbyyBridge\StructType\AbbyyLogRecord) {
                $invalidValues[] = is_object($recordsLogRecordItem) ? get_class($recordsLogRecordItem) : sprintf('%s(%s)', gettype($recordsLogRecordItem), var_export($recordsLogRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LogRecord property can only contain items of type \AbbyyBridge\StructType\AbbyyLogRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LogRecord value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyLogRecord[] $logRecord
     * @return \AbbyyBridge\StructType\AbbyyRecords
     */
    public function setLogRecord(array $logRecord = array())
    {
        // validation for constraint: array
        if ('' !== ($logRecordArrayErrorMessage = self::validateLogRecordForArrayConstraintsFromSetLogRecord($logRecord))) {
            throw new \InvalidArgumentException($logRecordArrayErrorMessage, __LINE__);
        }
        $this->LogRecord = $logRecord;
        return $this;
    }
    /**
     * Add item to LogRecord value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyLogRecord $item
     * @return \AbbyyBridge\StructType\AbbyyRecords
     */
    public function addToLogRecord(\AbbyyBridge\StructType\AbbyyLogRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyLogRecord) {
            throw new \InvalidArgumentException(sprintf('The LogRecord property can only contain items of type \AbbyyBridge\StructType\AbbyyLogRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LogRecord[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyRecords
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
