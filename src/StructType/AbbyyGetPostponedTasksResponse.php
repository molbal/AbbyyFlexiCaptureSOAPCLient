<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPostponedTasksResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetPostponedTasksResponse extends AbstractStructBase
{
    /**
     * The tasks
     * @var \AbbyyBridge\StructType\AbbyyTaskList
     */
    public $tasks;
    /**
     * Constructor method for GetPostponedTasksResponse
     * @uses AbbyyGetPostponedTasksResponse::setTasks()
     * @param \AbbyyBridge\StructType\AbbyyTaskList $tasks
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyTaskList $tasks = null)
    {
        $this
            ->setTasks($tasks);
    }
    /**
     * Get tasks value
     * @return \AbbyyBridge\StructType\AbbyyTaskList|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @param \AbbyyBridge\StructType\AbbyyTaskList $tasks
     * @return \AbbyyBridge\StructType\AbbyyGetPostponedTasksResponse
     */
    public function setTasks(\AbbyyBridge\StructType\AbbyyTaskList $tasks = null)
    {
        $this->tasks = $tasks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetPostponedTasksResponse
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
