<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskList StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyTaskList extends AbstractStructBase
{
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyTask[]
     */
    public $Task;
    /**
     * Constructor method for TaskList
     * @uses AbbyyTaskList::setTask()
     * @param \AbbyyBridge\StructType\AbbyyTask[] $task
     */
    public function __construct(array $task = array())
    {
        $this
            ->setTask($task);
    }
    /**
     * Get Task value
     * @return \AbbyyBridge\StructType\AbbyyTask[]|null
     */
    public function getTask()
    {
        return $this->Task;
    }
    /**
     * This method is responsible for validating the values passed to the setTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTask method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskForArrayConstraintsFromSetTask(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskListTaskItem) {
            // validation for constraint: itemType
            if (!$taskListTaskItem instanceof \AbbyyBridge\StructType\AbbyyTask) {
                $invalidValues[] = is_object($taskListTaskItem) ? get_class($taskListTaskItem) : sprintf('%s(%s)', gettype($taskListTaskItem), var_export($taskListTaskItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Task property can only contain items of type \AbbyyBridge\StructType\AbbyyTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Task value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyTask[] $task
     * @return \AbbyyBridge\StructType\AbbyyTaskList
     */
    public function setTask(array $task = array())
    {
        // validation for constraint: array
        if ('' !== ($taskArrayErrorMessage = self::validateTaskForArrayConstraintsFromSetTask($task))) {
            throw new \InvalidArgumentException($taskArrayErrorMessage, __LINE__);
        }
        $this->Task = $task;
        return $this;
    }
    /**
     * Add item to Task value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyTask $item
     * @return \AbbyyBridge\StructType\AbbyyTaskList
     */
    public function addToTask(\AbbyyBridge\StructType\AbbyyTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyTask) {
            throw new \InvalidArgumentException(sprintf('The Task property can only contain items of type \AbbyyBridge\StructType\AbbyyTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Task[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyTaskList
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
