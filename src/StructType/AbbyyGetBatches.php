<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBatches StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetBatches extends AbstractStructBase
{
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The onlyPrivateBatches
     * @var bool
     */
    public $onlyPrivateBatches;
    /**
     * Constructor method for GetBatches
     * @uses AbbyyGetBatches::setProjectId()
     * @uses AbbyyGetBatches::setSessionId()
     * @uses AbbyyGetBatches::setOnlyPrivateBatches()
     * @param int $projectId
     * @param int $sessionId
     * @param bool $onlyPrivateBatches
     */
    public function __construct($projectId = null, $sessionId = null, $onlyPrivateBatches = null)
    {
        $this
            ->setProjectId($projectId)
            ->setSessionId($sessionId)
            ->setOnlyPrivateBatches($onlyPrivateBatches);
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
     * @return \AbbyyBridge\StructType\AbbyyGetBatches
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
     * @return \AbbyyBridge\StructType\AbbyyGetBatches
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
     * @return \AbbyyBridge\StructType\AbbyyGetBatches
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
     * @return \AbbyyBridge\StructType\AbbyyGetBatches
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
