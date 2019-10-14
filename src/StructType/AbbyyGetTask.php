<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTask StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetTask extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * The stageType
     * @var int
     */
    public $stageType;
    /**
     * The onlyPreprocessedTasks
     * @var bool
     */
    public $onlyPreprocessedTasks;
    /**
     * The onlyPrivateBatches
     * @var bool
     */
    public $onlyPrivateBatches;
    /**
     * Constructor method for GetTask
     * @uses AbbyyGetTask::setSessionId()
     * @uses AbbyyGetTask::setProjectId()
     * @uses AbbyyGetTask::setStageType()
     * @uses AbbyyGetTask::setOnlyPreprocessedTasks()
     * @uses AbbyyGetTask::setOnlyPrivateBatches()
     * @param int $sessionId
     * @param int $projectId
     * @param int $stageType
     * @param bool $onlyPreprocessedTasks
     * @param bool $onlyPrivateBatches
     */
    public function __construct($sessionId = null, $projectId = null, $stageType = null, $onlyPreprocessedTasks = null, $onlyPrivateBatches = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setProjectId($projectId)
            ->setStageType($stageType)
            ->setOnlyPreprocessedTasks($onlyPreprocessedTasks)
            ->setOnlyPrivateBatches($onlyPrivateBatches);
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
     * @return \AbbyyBridge\StructType\AbbyyGetTask
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
     * Get projectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyGetTask
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
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
     * @return \AbbyyBridge\StructType\AbbyyGetTask
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
     * Get onlyPreprocessedTasks value
     * @return bool|null
     */
    public function getOnlyPreprocessedTasks()
    {
        return $this->onlyPreprocessedTasks;
    }
    /**
     * Set onlyPreprocessedTasks value
     * @param bool $onlyPreprocessedTasks
     * @return \AbbyyBridge\StructType\AbbyyGetTask
     */
    public function setOnlyPreprocessedTasks($onlyPreprocessedTasks = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyPreprocessedTasks) && !is_bool($onlyPreprocessedTasks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyPreprocessedTasks, true), gettype($onlyPreprocessedTasks)), __LINE__);
        }
        $this->onlyPreprocessedTasks = $onlyPreprocessedTasks;
        return $this;
    }
    /**
     * Get onlyPrivateBatches value
     * @return bool|null
     */
    public function getOnlyPrivateBatches()
    {
        return $this->onlyPrivateBatches;
    }
    /**
     * Set onlyPrivateBatches value
     * @param bool $onlyPrivateBatches
     * @return \AbbyyBridge\StructType\AbbyyGetTask
     */
    public function setOnlyPrivateBatches($onlyPrivateBatches = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyPrivateBatches) && !is_bool($onlyPrivateBatches)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyPrivateBatches, true), gettype($onlyPrivateBatches)), __LINE__);
        }
        $this->onlyPrivateBatches = $onlyPrivateBatches;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetTask
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
