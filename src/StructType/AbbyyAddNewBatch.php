<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewBatch StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyAddNewBatch extends AbstractStructBase
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
     * The batch
     * @var \AbbyyBridge\StructType\AbbyyBatch
     */
    public $batch;
    /**
     * The ownerId
     * @var int
     */
    public $ownerId;
    /**
     * Constructor method for AddNewBatch
     * @uses AbbyyAddNewBatch::setSessionId()
     * @uses AbbyyAddNewBatch::setProjectId()
     * @uses AbbyyAddNewBatch::setBatch()
     * @uses AbbyyAddNewBatch::setOwnerId()
     * @param int $sessionId
     * @param int $projectId
     * @param \AbbyyBridge\StructType\AbbyyBatch $batch
     * @param int $ownerId
     */
    public function __construct($sessionId = null, $projectId = null, \AbbyyBridge\StructType\AbbyyBatch $batch = null, $ownerId = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setProjectId($projectId)
            ->setBatch($batch)
            ->setOwnerId($ownerId);
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatch
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
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatch
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
     * Get batch value
     * @return \AbbyyBridge\StructType\AbbyyBatch|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param \AbbyyBridge\StructType\AbbyyBatch $batch
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatch
     */
    public function setBatch(\AbbyyBridge\StructType\AbbyyBatch $batch = null)
    {
        $this->batch = $batch;
        return $this;
    }
    /**
     * Get ownerId value
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param int $ownerId
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatch
     */
    public function setOwnerId($ownerId = null)
    {
        // validation for constraint: int
        if (!is_null($ownerId) && !(is_int($ownerId) || ctype_digit($ownerId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatch
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
