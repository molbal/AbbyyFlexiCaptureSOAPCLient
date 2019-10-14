<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableTasksByStageId StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAvailableTasksByStageId extends AbstractStructBase
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
     * The stageIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyStageIds
     */
    public $stageIds;
    /**
     * The onlyPrivateBatches
     * @var bool
     */
    public $onlyPrivateBatches;
    /**
     * Constructor method for GetAvailableTasksByStageId
     * @uses AbbyyGetAvailableTasksByStageId::setSessionId()
     * @uses AbbyyGetAvailableTasksByStageId::setProjectId()
     * @uses AbbyyGetAvailableTasksByStageId::setStageIds()
     * @uses AbbyyGetAvailableTasksByStageId::setOnlyPrivateBatches()
     * @param int $sessionId
     * @param int $projectId
     * @param \AbbyyBridge\StructType\AbbyyStageIds $stageIds
     * @param bool $onlyPrivateBatches
     */
    public function __construct($sessionId = null, $projectId = null, \AbbyyBridge\StructType\AbbyyStageIds $stageIds = null, $onlyPrivateBatches = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setProjectId($projectId)
            ->setStageIds($stageIds)
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId
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
     * Get stageIds value
     * @return \AbbyyBridge\StructType\AbbyyStageIds|null
     */
    public function getStageIds()
    {
        return $this->stageIds;
    }
    /**
     * Set stageIds value
     * @param \AbbyyBridge\StructType\AbbyyStageIds $stageIds
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId
     */
    public function setStageIds(\AbbyyBridge\StructType\AbbyyStageIds $stageIds = null)
    {
        $this->stageIds = $stageIds;
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId
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
