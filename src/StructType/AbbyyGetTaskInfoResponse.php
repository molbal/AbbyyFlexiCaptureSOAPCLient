<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskInfoResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetTaskInfoResponse extends AbstractStructBase
{
    /**
     * The task
     * @var \AbbyyBridge\StructType\AbbyyTask
     */
    public $task;
    /**
     * Constructor method for GetTaskInfoResponse
     * @uses AbbyyGetTaskInfoResponse::setTask()
     * @param \AbbyyBridge\StructType\AbbyyTask $task
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyTask $task = null)
    {
        $this
            ->setTask($task);
    }
    /**
     * Get task value
     * @return \AbbyyBridge\StructType\AbbyyTask|null
     */
    public function getTask()
    {
        return $this->task;
    }
    /**
     * Set task value
     * @param \AbbyyBridge\StructType\AbbyyTask $task
     * @return \AbbyyBridge\StructType\AbbyyGetTaskInfoResponse
     */
    public function setTask(\AbbyyBridge\StructType\AbbyyTask $task = null)
    {
        $this->task = $task;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetTaskInfoResponse
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
