<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessingStages StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetProcessingStages extends AbstractStructBase
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
     * The stageType
     * @var int
     */
    public $stageType;
    /**
     * The stageName
     * @var string
     */
    public $stageName;
    /**
     * Constructor method for GetProcessingStages
     * @uses AbbyyGetProcessingStages::setProjectId()
     * @uses AbbyyGetProcessingStages::setBatchTypeId()
     * @uses AbbyyGetProcessingStages::setStageType()
     * @uses AbbyyGetProcessingStages::setStageName()
     * @param int $projectId
     * @param int $batchTypeId
     * @param int $stageType
     * @param string $stageName
     */
    public function __construct($projectId = null, $batchTypeId = null, $stageType = null, $stageName = null)
    {
        $this
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setStageType($stageType)
            ->setStageName($stageName);
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
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStages
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
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStages
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
     * Get stageType value
     * @return int|null
     */
    public function getStageType()
    {
        return $this->stageType;
    }
    /**
     * Set stageType value
     * @param int $stageType
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStages
     */
    public function setStageType($stageType = null)
    {
        // validation for constraint: int
        if (!is_null($stageType) && !(is_int($stageType) || ctype_digit($stageType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageType, true), gettype($stageType)), __LINE__);
        }
        $this->stageType = $stageType;
        return $this;
    }
    /**
     * Get stageName value
     * @return string|null
     */
    public function getStageName()
    {
        return $this->stageName;
    }
    /**
     * Set stageName value
     * @param string $stageName
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStages
     */
    public function setStageName($stageName = null)
    {
        // validation for constraint: string
        if (!is_null($stageName) && !is_string($stageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stageName, true), gettype($stageName)), __LINE__);
        }
        $this->stageName = $stageName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStages
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
