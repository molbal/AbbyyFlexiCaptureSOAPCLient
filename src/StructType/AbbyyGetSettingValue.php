<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSettingValue StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetSettingValue extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
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
     * The settingName
     * @var string
     */
    public $settingName;
    /**
     * Constructor method for GetSettingValue
     * @uses AbbyyGetSettingValue::setUserId()
     * @uses AbbyyGetSettingValue::setProjectId()
     * @uses AbbyyGetSettingValue::setBatchTypeId()
     * @uses AbbyyGetSettingValue::setSettingName()
     * @param int $userId
     * @param int $projectId
     * @param int $batchTypeId
     * @param string $settingName
     */
    public function __construct($userId = null, $projectId = null, $batchTypeId = null, $settingName = null)
    {
        $this
            ->setUserId($userId)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setSettingName($settingName);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValue
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
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
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValue
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
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValue
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
     * Get settingName value
     * @return string|null
     */
    public function getSettingName()
    {
        return $this->settingName;
    }
    /**
     * Set settingName value
     * @param string $settingName
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValue
     */
    public function setSettingName($settingName = null)
    {
        // validation for constraint: string
        if (!is_null($settingName) && !is_string($settingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settingName, true), gettype($settingName)), __LINE__);
        }
        $this->settingName = $settingName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValue
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
