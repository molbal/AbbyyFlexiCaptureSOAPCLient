<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableUsers StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAvailableUsers extends AbstractStructBase
{
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * The batchTypeId
     * @var int
     */
    public $batchTypeId;
    /**
     * The stageExternalId
     * @var int
     */
    public $stageExternalId;
    /**
     * Constructor method for GetAvailableUsers
     * @uses AbbyyGetAvailableUsers::setProjectId()
     * @uses AbbyyGetAvailableUsers::setBatchTypeId()
     * @uses AbbyyGetAvailableUsers::setStageExternalId()
     * @param int $projectId
     * @param int $batchTypeId
     * @param int $stageExternalId
     */
    public function __construct($projectId = null, $batchTypeId = null, $stageExternalId = null)
    {
        $this
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setStageExternalId($stageExternalId);
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableUsers
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
     * Get batchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->batchTypeId;
    }
    /**
     * Set batchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableUsers
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->batchTypeId = $batchTypeId;
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
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableUsers
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableUsers
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
