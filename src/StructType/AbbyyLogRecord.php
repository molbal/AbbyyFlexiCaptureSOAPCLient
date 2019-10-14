<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogRecord StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyLogRecord extends AbstractStructBase
{
    /**
     * The Type
     * @var int
     */
    public $Type;
    /**
     * The SessionId
     * @var int
     */
    public $SessionId;
    /**
     * The UserId
     * @var int
     */
    public $UserId;
    /**
     * The MachineId
     * @var string
     */
    public $MachineId;
    /**
     * The RoleId
     * @var int
     */
    public $RoleId;
    /**
     * The TaskId
     * @var int
     */
    public $TaskId;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * The BatchId
     * @var int
     */
    public $BatchId;
    /**
     * The DocumentId
     * @var int
     */
    public $DocumentId;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The Details
     * @var string
     */
    public $Details;
    /**
     * The Time
     * @var int
     */
    public $Time;
    /**
     * Constructor method for LogRecord
     * @uses AbbyyLogRecord::setType()
     * @uses AbbyyLogRecord::setSessionId()
     * @uses AbbyyLogRecord::setUserId()
     * @uses AbbyyLogRecord::setMachineId()
     * @uses AbbyyLogRecord::setRoleId()
     * @uses AbbyyLogRecord::setTaskId()
     * @uses AbbyyLogRecord::setProjectId()
     * @uses AbbyyLogRecord::setBatchId()
     * @uses AbbyyLogRecord::setDocumentId()
     * @uses AbbyyLogRecord::setComment()
     * @uses AbbyyLogRecord::setDetails()
     * @uses AbbyyLogRecord::setTime()
     * @param int $type
     * @param int $sessionId
     * @param int $userId
     * @param string $machineId
     * @param int $roleId
     * @param int $taskId
     * @param int $projectId
     * @param int $batchId
     * @param int $documentId
     * @param string $comment
     * @param string $details
     * @param int $time
     */
    public function __construct($type = null, $sessionId = null, $userId = null, $machineId = null, $roleId = null, $taskId = null, $projectId = null, $batchId = null, $documentId = null, $comment = null, $details = null, $time = null)
    {
        $this
            ->setType($type)
            ->setSessionId($sessionId)
            ->setUserId($userId)
            ->setMachineId($machineId)
            ->setRoleId($roleId)
            ->setTaskId($taskId)
            ->setProjectId($projectId)
            ->setBatchId($batchId)
            ->setDocumentId($documentId)
            ->setComment($comment)
            ->setDetails($details)
            ->setTime($time);
    }
    /**
     * Get Type value
     * @return int|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get SessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }
    /**
     * Set SessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->SessionId = $sessionId;
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
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
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
     * Get MachineId value
     * @return string|null
     */
    public function getMachineId()
    {
        return $this->MachineId;
    }
    /**
     * Set MachineId value
     * @param string $machineId
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setMachineId($machineId = null)
    {
        // validation for constraint: string
        if (!is_null($machineId) && !is_string($machineId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($machineId, true), gettype($machineId)), __LINE__);
        }
        $this->MachineId = $machineId;
        return $this;
    }
    /**
     * Get RoleId value
     * @return int|null
     */
    public function getRoleId()
    {
        return $this->RoleId;
    }
    /**
     * Set RoleId value
     * @param int $roleId
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setRoleId($roleId = null)
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->RoleId = $roleId;
        return $this;
    }
    /**
     * Get TaskId value
     * @return int|null
     */
    public function getTaskId()
    {
        return $this->TaskId;
    }
    /**
     * Set TaskId value
     * @param int $taskId
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setTaskId($taskId = null)
    {
        // validation for constraint: int
        if (!is_null($taskId) && !(is_int($taskId) || ctype_digit($taskId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), gettype($taskId)), __LINE__);
        }
        $this->TaskId = $taskId;
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
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
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
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
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
     * Get DocumentId value
     * @return int|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param int $documentId
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
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
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
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
     * Get Details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param string $details
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Get Time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param int $time
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !(is_int($time) || ctype_digit($time))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyLogRecord
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
