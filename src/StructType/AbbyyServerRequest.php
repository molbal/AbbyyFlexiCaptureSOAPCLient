<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServerRequest StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyServerRequest extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The BatchId
     * @var int
     */
    public $BatchId;
    /**
     * The TaskId
     * @var int
     */
    public $TaskId;
    /**
     * The SessionId
     * @var int
     */
    public $SessionId;
    /**
     * The Status
     * @var int
     */
    public $Status;
    /**
     * Constructor method for ServerRequest
     * @uses AbbyyServerRequest::setId()
     * @uses AbbyyServerRequest::setBatchId()
     * @uses AbbyyServerRequest::setTaskId()
     * @uses AbbyyServerRequest::setSessionId()
     * @uses AbbyyServerRequest::setStatus()
     * @param int $id
     * @param int $batchId
     * @param int $taskId
     * @param int $sessionId
     * @param int $status
     */
    public function __construct($id = null, $batchId = null, $taskId = null, $sessionId = null, $status = null)
    {
        $this
            ->setId($id)
            ->setBatchId($batchId)
            ->setTaskId($taskId)
            ->setSessionId($sessionId)
            ->setStatus($status);
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
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyServerRequest
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
