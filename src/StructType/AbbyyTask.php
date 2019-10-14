<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyTask extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * The BatchTypeId
     * @var int
     */
    public $BatchTypeId;
    /**
     * The BatchId
     * @var int
     */
    public $BatchId;
    /**
     * The Priority
     * @var int
     */
    public $Priority;
    /**
     * The Status
     * @var int
     */
    public $Status;
    /**
     * The CreationTime
     * @var int
     */
    public $CreationTime;
    /**
     * The ModificationTime
     * @var int
     */
    public $ModificationTime;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The StageType
     * @var int
     */
    public $StageType;
    /**
     * The UserId
     * @var int
     */
    public $UserId;
    /**
     * The Flags
     * @var int
     */
    public $Flags;
    /**
     * The CreatorId
     * @var int
     */
    public $CreatorId;
    /**
     * The BatchName
     * @var string
     */
    public $BatchName;
    /**
     * The StageExternalId
     * @var int
     */
    public $StageExternalId;
    /**
     * Constructor method for Task
     * @uses AbbyyTask::setId()
     * @uses AbbyyTask::setProjectId()
     * @uses AbbyyTask::setBatchTypeId()
     * @uses AbbyyTask::setBatchId()
     * @uses AbbyyTask::setPriority()
     * @uses AbbyyTask::setStatus()
     * @uses AbbyyTask::setCreationTime()
     * @uses AbbyyTask::setModificationTime()
     * @uses AbbyyTask::setComment()
     * @uses AbbyyTask::setStageType()
     * @uses AbbyyTask::setUserId()
     * @uses AbbyyTask::setFlags()
     * @uses AbbyyTask::setCreatorId()
     * @uses AbbyyTask::setBatchName()
     * @uses AbbyyTask::setStageExternalId()
     * @param int $id
     * @param int $projectId
     * @param int $batchTypeId
     * @param int $batchId
     * @param int $priority
     * @param int $status
     * @param int $creationTime
     * @param int $modificationTime
     * @param string $comment
     * @param int $stageType
     * @param int $userId
     * @param int $flags
     * @param int $creatorId
     * @param string $batchName
     * @param int $stageExternalId
     */
    public function __construct($id = null, $projectId = null, $batchTypeId = null, $batchId = null, $priority = null, $status = null, $creationTime = null, $modificationTime = null, $comment = null, $stageType = null, $userId = null, $flags = null, $creatorId = null, $batchName = null, $stageExternalId = null)
    {
        $this
            ->setId($id)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setBatchId($batchId)
            ->setPriority($priority)
            ->setStatus($status)
            ->setCreationTime($creationTime)
            ->setModificationTime($modificationTime)
            ->setComment($comment)
            ->setStageType($stageType)
            ->setUserId($userId)
            ->setFlags($flags)
            ->setCreatorId($creatorId)
            ->setBatchName($batchName)
            ->setStageExternalId($stageExternalId);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ProjectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }
    /**
     * Set ProjectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->ProjectId = $projectId;
        return $this;
    }
    /**
     * Get BatchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->BatchTypeId;
    }
    /**
     * Set BatchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->BatchTypeId = $batchTypeId;
        return $this;
    }
    /**
     * Get BatchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->BatchId = $batchId;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return int|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param int $creationTime
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: int
        if (!is_null($creationTime) && !(is_int($creationTime) || ctype_digit($creationTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get ModificationTime value
     * @return int|null
     */
    public function getModificationTime()
    {
        return $this->ModificationTime;
    }
    /**
     * Set ModificationTime value
     * @param int $modificationTime
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setModificationTime($modificationTime = null)
    {
        // validation for constraint: int
        if (!is_null($modificationTime) && !(is_int($modificationTime) || ctype_digit($modificationTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modificationTime, true), gettype($modificationTime)), __LINE__);
        }
        $this->ModificationTime = $modificationTime;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get StageType value
     * @return int|null
     */
    public function getStageType()
    {
        return $this->StageType;
    }
    /**
     * Set StageType value
     * @param int $stageType
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setStageType($stageType = null)
    {
        // validation for constraint: int
        if (!is_null($stageType) && !(is_int($stageType) || ctype_digit($stageType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageType, true), gettype($stageType)), __LINE__);
        }
        $this->StageType = $stageType;
        return $this;
    }
    /**
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Flags value
     * @return int|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @param int $flags
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setFlags($flags = null)
    {
        // validation for constraint: int
        if (!is_null($flags) && !(is_int($flags) || ctype_digit($flags))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flags, true), gettype($flags)), __LINE__);
        }
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Get CreatorId value
     * @return int|null
     */
    public function getCreatorId()
    {
        return $this->CreatorId;
    }
    /**
     * Set CreatorId value
     * @param int $creatorId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setCreatorId($creatorId = null)
    {
        // validation for constraint: int
        if (!is_null($creatorId) && !(is_int($creatorId) || ctype_digit($creatorId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatorId, true), gettype($creatorId)), __LINE__);
        }
        $this->CreatorId = $creatorId;
        return $this;
    }
    /**
     * Get BatchName value
     * @return string|null
     */
    public function getBatchName()
    {
        return $this->BatchName;
    }
    /**
     * Set BatchName value
     * @param string $batchName
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setBatchName($batchName = null)
    {
        // validation for constraint: string
        if (!is_null($batchName) && !is_string($batchName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batchName, true), gettype($batchName)), __LINE__);
        }
        $this->BatchName = $batchName;
        return $this;
    }
    /**
     * Get StageExternalId value
     * @return int|null
     */
    public function getStageExternalId()
    {
        return $this->StageExternalId;
    }
    /**
     * Set StageExternalId value
     * @param int $stageExternalId
     * @return \AbbyyBridge\StructType\AbbyyTask
     */
    public function setStageExternalId($stageExternalId = null)
    {
        // validation for constraint: int
        if (!is_null($stageExternalId) && !(is_int($stageExternalId) || ctype_digit($stageExternalId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageExternalId, true), gettype($stageExternalId)), __LINE__);
        }
        $this->StageExternalId = $stageExternalId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyTask
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
