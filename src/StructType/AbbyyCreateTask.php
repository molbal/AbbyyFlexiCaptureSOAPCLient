<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTask StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyCreateTask extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The batchId
     * @var int
     */
    public $batchId;
    /**
     * The stageExternalId
     * @var int
     */
    public $stageExternalId;
    /**
     * The priority
     * @var int
     */
    public $priority;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The docIds
     * @var \AbbyyBridge\StructType\AbbyyDocIds
     */
    public $docIds;
    /**
     * The setAsCurrentTask
     * @var bool
     */
    public $setAsCurrentTask;
    /**
     * Constructor method for CreateTask
     * @uses AbbyyCreateTask::setSessionId()
     * @uses AbbyyCreateTask::setBatchId()
     * @uses AbbyyCreateTask::setStageExternalId()
     * @uses AbbyyCreateTask::setPriority()
     * @uses AbbyyCreateTask::setComment()
     * @uses AbbyyCreateTask::setUserId()
     * @uses AbbyyCreateTask::setDocIds()
     * @uses AbbyyCreateTask::setSetAsCurrentTask()
     * @param int $sessionId
     * @param int $batchId
     * @param int $stageExternalId
     * @param int $priority
     * @param string $comment
     * @param int $userId
     * @param \AbbyyBridge\StructType\AbbyyDocIds $docIds
     * @param bool $setAsCurrentTask
     */
    public function __construct($sessionId = null, $batchId = null, $stageExternalId = null, $priority = null, $comment = null, $userId = null, \AbbyyBridge\StructType\AbbyyDocIds $docIds = null, $setAsCurrentTask = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setStageExternalId($stageExternalId)
            ->setPriority($priority)
            ->setComment($comment)
            ->setUserId($userId)
            ->setDocIds($docIds)
            ->setSetAsCurrentTask($setAsCurrentTask);
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
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
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
     * Get batchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        return $this;
    }
    /**
     * Get stageExternalId value
     * @return int|null
     */
    public function getStageExternalId()
    {
        return $this->stageExternalId;
    }
    /**
     * Set stageExternalId value
     * @param int $stageExternalId
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
     */
    public function setStageExternalId($stageExternalId = null)
    {
        // validation for constraint: int
        if (!is_null($stageExternalId) && !(is_int($stageExternalId) || ctype_digit($stageExternalId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageExternalId, true), gettype($stageExternalId)), __LINE__);
        }
        $this->stageExternalId = $stageExternalId;
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
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
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
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
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
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
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
     * Get docIds value
     * @return \AbbyyBridge\StructType\AbbyyDocIds|null
     */
    public function getDocIds()
    {
        return $this->docIds;
    }
    /**
     * Set docIds value
     * @param \AbbyyBridge\StructType\AbbyyDocIds $docIds
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
     */
    public function setDocIds(\AbbyyBridge\StructType\AbbyyDocIds $docIds = null)
    {
        $this->docIds = $docIds;
        return $this;
    }
    /**
     * Get setAsCurrentTask value
     * @return bool|null
     */
    public function getSetAsCurrentTask()
    {
        return $this->setAsCurrentTask;
    }
    /**
     * Set setAsCurrentTask value
     * @param bool $setAsCurrentTask
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
     */
    public function setSetAsCurrentTask($setAsCurrentTask = null)
    {
        // validation for constraint: boolean
        if (!is_null($setAsCurrentTask) && !is_bool($setAsCurrentTask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($setAsCurrentTask, true), gettype($setAsCurrentTask)), __LINE__);
        }
        $this->setAsCurrentTask = $setAsCurrentTask;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyCreateTask
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
