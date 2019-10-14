<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBatch StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyUpdateBatch extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The batch
     * @var \AbbyyBridge\StructType\AbbyyBatch
     */
    public $batch;
    /**
     * Constructor method for UpdateBatch
     * @uses AbbyyUpdateBatch::setSessionId()
     * @uses AbbyyUpdateBatch::setBatch()
     * @param int $sessionId
     * @param \AbbyyBridge\StructType\AbbyyBatch $batch
     */
    public function __construct($sessionId = null, \AbbyyBridge\StructType\AbbyyBatch $batch = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatch($batch);
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
     * @return \AbbyyBridge\StructType\AbbyyUpdateBatch
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
     * @return \AbbyyBridge\StructType\AbbyyUpdateBatch
     */
    public function setBatch(\AbbyyBridge\StructType\AbbyyBatch $batch = null)
    {
        $this->batch = $batch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyUpdateBatch
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
