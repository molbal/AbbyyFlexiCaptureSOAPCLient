<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTaskPriority StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySetTaskPriority extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The taskId
     * @var int
     */
    public $taskId;
    /**
     * The priority
     * @var int
     */
    public $priority;
    /**
     * Constructor method for SetTaskPriority
     * @uses AbbyySetTaskPriority::setSessionId()
     * @uses AbbyySetTaskPriority::setTaskId()
     * @uses AbbyySetTaskPriority::setPriority()
     * @param int $sessionId
     * @param int $taskId
     * @param int $priority
     */
    public function __construct($sessionId = null, $taskId = null, $priority = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setTaskId($taskId)
            ->setPriority($priority);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyySetTaskPriority
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
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
     * @return \AbbyyBridge\StructType\AbbyySetTaskPriority
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
     * Get priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \AbbyyBridge\StructType\AbbyySetTaskPriority
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyySetTaskPriority
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
