<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskDocuments StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetTaskDocuments extends AbstractStructBase
{
    /**
     * The taskId
     * @var int
     */
    public $taskId;
    /**
     * Constructor method for GetTaskDocuments
     * @uses AbbyyGetTaskDocuments::setTaskId()
     * @param int $taskId
     */
    public function __construct($taskId = null)
    {
        $this
            ->setTaskId($taskId);
    }
    /**
     * Get taskId value
     * @return int|null
     */
    public function getTaskId()
    {
        return $this->taskId;
    }
    /**
     * Set taskId value
     * @param int $taskId
     * @return \AbbyyBridge\StructType\AbbyyGetTaskDocuments
     */
    public function setTaskId($taskId = null)
    {
        // validation for constraint: int
        if (!is_null($taskId) && !(is_int($taskId) || ctype_digit($taskId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), gettype($taskId)), __LINE__);
        }
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetTaskDocuments
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
