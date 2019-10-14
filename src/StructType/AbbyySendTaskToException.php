<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTaskToException StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySendTaskToException extends AbstractStructBase
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
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The needPostprocessing
     * @var bool
     */
    public $needPostprocessing;
    /**
     * Constructor method for SendTaskToException
     * @uses AbbyySendTaskToException::setSessionId()
     * @uses AbbyySendTaskToException::setTaskId()
     * @uses AbbyySendTaskToException::setComment()
     * @uses AbbyySendTaskToException::setNeedPostprocessing()
     * @param int $sessionId
     * @param int $taskId
     * @param string $comment
     * @param bool $needPostprocessing
     */
    public function __construct($sessionId = null, $taskId = null, $comment = null, $needPostprocessing = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setTaskId($taskId)
            ->setComment($comment)
            ->setNeedPostprocessing($needPostprocessing);
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
     * @return \AbbyyBridge\StructType\AbbyySendTaskToException
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
     * @return \AbbyyBridge\StructType\AbbyySendTaskToException
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
     * @return \AbbyyBridge\StructType\AbbyySendTaskToException
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
     * Get needPostprocessing value
     * @return bool|null
     */
    public function getNeedPostprocessing()
    {
        return $this->needPostprocessing;
    }
    /**
     * Set needPostprocessing value
     * @param bool $needPostprocessing
     * @return \AbbyyBridge\StructType\AbbyySendTaskToException
     */
    public function setNeedPostprocessing($needPostprocessing = null)
    {
        // validation for constraint: boolean
        if (!is_null($needPostprocessing) && !is_bool($needPostprocessing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needPostprocessing, true), gettype($needPostprocessing)), __LINE__);
        }
        $this->needPostprocessing = $needPostprocessing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyySendTaskToException
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
