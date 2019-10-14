<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseTask StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyCloseTask extends AbstractStructBase
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
     * The stageType
     * @var int
     */
    public $stageType;
    /**
     * Constructor method for CloseTask
     * @uses AbbyyCloseTask::setSessionId()
     * @uses AbbyyCloseTask::setTaskId()
     * @uses AbbyyCloseTask::setStageType()
     * @param int $sessionId
     * @param int $taskId
     * @param int $stageType
     */
    public function __construct($sessionId = null, $taskId = null, $stageType = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setTaskId($taskId)
            ->setStageType($stageType);
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
     * @return \AbbyyBridge\StructType\AbbyyCloseTask
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
     * @return \AbbyyBridge\StructType\AbbyyCloseTask
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
     * Get stageType value
     * @return int|null
     */
    public function getStageType()
    {
        return $this->stageType;
    }
    /**
     * Set stageType value
     * @param int $stageType
     * @return \AbbyyBridge\StructType\AbbyyCloseTask
     */
    public function setStageType($stageType = null)
    {
        // validation for constraint: int
        if (!is_null($stageType) && !(is_int($stageType) || ctype_digit($stageType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageType, true), gettype($stageType)), __LINE__);
        }
        $this->stageType = $stageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyCloseTask
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
